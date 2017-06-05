<?php

   session_start();
       require_once 'DataBase.php';
        $db = new DataBase();
        $db->conectar();
                           
if(isset($_SESSION['carrito'])){
    if(isset($_GET['id'])){
        
    $vector=$_SESSION['carrito'];
    $probar=false;
    $numero=0;
    
    for($i = 0;$i<count($vector);$i++){
        if($vector[$i]['Id']==$_GET['id']){
            $probar=true;
            $numero=$i;
        }
    }
    if($probar==true){
        $vector[$numero]['Cantidad']= $vector[$numero]['Cantidad']+1;
        $_SESSION['carrito']=$vector;
        
    }else{
          $nombre="";
         $precio=0;
         $imagen="";
        $re = $db->consultarDato("productos","codigo_producto",$_GET['id']);
        while ($row=mysql_fetch_array($re)) {
            
        $nombre=$row['nombre'];
         $precio=$row['valor'];
         $imagen=$row['imagen'];
    }
        $datosNuevos=array('Id'=>$_GET['id'],
                       'Nombre'=>$nombre,
                       'Precio'=>$precio,
                       'Imagen'=>$imagen,
                       'Cantidad'=>1);
        array_push($vector,$datosNuevos);
        $_SESSION['carrito']=$vector;
    }
    
     }
    
}else{
    if(isset($_GET['id'])){       
        $nombre="";
         $precio=0;
         $imagen="";
        $re = $db->consultarDato("productos","codigo_producto",$_GET['id']);
        while ($row=mysql_fetch_array($re)) {
            
        $nombre=$row['nombre'];
         $precio=$row['valor'];
         $imagen=$row['imagen'];
    }
        $vector[]=array('Id'=>$_GET['id'],
                       'Nombre'=>$nombre,
                       'Precio'=>$precio,
                       'Imagen'=>$imagen,
                       'Cantidad'=>1);
        $_SESSION['carrito']=$vector;
    
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carrito de Compras</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">   
</head>
<body id="page5">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="index.php">Bycicles<span>Parts</span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="menu.php">Destacados</a></li>
                            <li><a href="catalogue.php">Galería </a></li>
                            <li><a href="shipping.php">Noticias</a></li>
                            <li><a href="contact.php">Contáctenos</a></li>
                            <li><a href="./faq.php"><img src="./images/carrito.png"></a></li>
                            <li><a href="factura.php?opcion=<?php  echo $opcion="cerrarSesion"; ?>" >Cerrar sesión</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Productos <span>Seleccionados</span></h2>
                </div>
            </div>
        </div>
    </header><br>
    
	<!--==============================content================================-->

    <center><a  class="button-1" href="catalogue.php" name="elegir" >Elegir otro producto</a></center>
    
    <div id="productos">						
							 
        <?php
            $total = 0;
            if(isset($_SESSION['carrito'])){
                $datos = $_SESSION['carrito'];
                $total = 0;
                for($i = 0; $i < count($datos);$i++){
        ?>

        <div class="campo">             
            <center>              
                <img src="./images/productos/<?php echo $datos[$i]['Imagen'];?>"><br>                    
                <span><?php echo $datos[$i]['Nombre'];?></span><br>   
                <span>Precio: $<?php echo $datos[$i]['Precio'];?></span><br>    
                <span>Cantidad: 
                 <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
                                    data-precio="<?php echo $datos[$i]['Precio'];?>"
                                    data-id="<?php echo $datos[$i]['Id'];?>"
                                    class="cantidad">
                </span><br>
                 <span class="subtotal">Subtotal: $<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br> 
                <!--a href="#" class="eliminar" data-id="?php echo $datos[$i]['Id']?>">Eliminar</a>-->
            </center>  
        </div>
        <?php
 
            $total = ($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;  
                }
            }else{

            echo '<center><h3">¡No has añadido productos al carrito!</<h3></center>';

            }
            echo '<strong><center><h3 id=total>Total: $'.$total.' </h3></center></strong>';                                 
        ?>                                                                                       
    </div>
    <?php
    
        if($total != 0){
    ?>
	<center><a href="factura.php"><input type="submit"  class="button-1" name="enviarPedido" value="Comprar"></a>
   <a href="ventas.php" ><input type="submit" class="button-1" name="ventas" value="Facturar"  ></a>
    <a href="factura.php?opcion=<?php echo $opcion="cancelarPedido"; ?>"><input type="submit"  class="button-1" name="cancelarPedido" value="Cancelar
    "  ></a></center><br>
    
    <?php   
        }
    ?>
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="aligncenter">
                    <h2><span>www.partesbicicletas.com</span></h2>
                    <br />
                    <h4>© Todos los derechos reservados. oscarsparza26@hotmail.com <br>
                        Dirección: Cra 119 A # 63D - 77 , Ciudad:Bogotá, Copyright.</h4>
                    <br />
                </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
</body>
</html>
