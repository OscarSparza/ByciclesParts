<?php
$documento;
$nombres;


session_start();

require_once 'DataBase.php';


if($_GET['opcion']=="cerrarSesion"){
    echo $_GET['opcion'];
    unset($_SESSION['carrito']);
    unset($_SESSION['usuario']);
    
   header("location:index.php");
}

if($_GET['opcion']=="cancelarPedido"){
    echo $_GET['opcion'];
    unset($_SESSION['carrito']);
    header("location:index.php");
}
else{

if(isset($_SESSION['usuario'])){
    $usuario=$_SESSION['usuario'];
    $db = new DataBase();
    $db->conectar();
  $re=mysql_query("select * from usuarios WHERE usuario = " ."'$usuario' " ) or die(mysql_error());
        while ($row=mysql_fetch_array($re)) {
            
        $documento=$row['documento_cliente'];
        $nombres=$row['nombres'];        
    }
    
}

    $vector = $_SESSION['carrito'];

 print '<script language="JavaScript">'; 
        print 'alert($usuario);'; 
     print '</script>';

    $numeroventa = 0;
    
    
    $re=mysql_query("select * from facturas order by numeroVenta DESC limit 1") or die(mysql_error());
    while ($row=mysql_fetch_array($re)) {
        $numeroventa = $row['numeroVenta'];
    }
if($numeroventa==0){
    $numeroventa=1;
}else{
    $numeroventa=$numeroventa+1;
}
for($i=0; $i<count($vector);$i++){
    
    mysql_query("insert into facturas (numeroVenta,documento_cliente,nombres_cliente,codigo_producto,producto,precio,cantidad,subtotal) values(
				".$numeroventa.",
                ".$documento.",
                '".$nombres."',
				'".$vector[$i]['Id']."',
                '".$vector[$i]['Nombre']."',
                '".$vector[$i]['Precio']."',
				'".$vector[$i]['Cantidad']."',
				'".($vector[$i]['Precio']*$vector[$i]['Cantidad'])."'
				)")or die(mysql_error());
    
    unset($SESSION['carrito']);
}
    
    
    
    
    header("location:ventas.php".'?id='.$numeroventa);
}

?>