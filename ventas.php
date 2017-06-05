<?php

date_default_timezone_set("America/Bogota");

$documento;
$nombres;
$apellidos;
$direccion;
$email;
$codigo;
$producto;
$descripcion;
$precio;
$subtotal;
$impuesto;
$total;

session_start();

require_once('app/lib/pdf/mpdf.php');
        require_once 'DataBase.php';
        $db = new DataBase();
        $db->conectar();


if(isset($_SESSION['usuario'])){
    $usuario=$_SESSION['usuario'];
    $re=mysql_query("select * from usuarios WHERE usuario = " ."'$usuario' " ) or die(mysql_error());
        while ($row=mysql_fetch_array($re)) {
            
        $documento=$row['documento_cliente'];
        $nombres=$row['nombres'];        
        $apellidos=$row['apellidos'];  
        $direccion=$row['direccion'];  
        $email=$row['correo'];  
    }    
}

    $numeroventa = $_GET['id'];
        $conn = new mysqli('localhost', 'root', 'enero6210', 'ventas');       
        $query="select * from facturas WHERE numeroVenta = " ."'$numeroventa' ";
        $prepare = $conn->prepare($query);
        $prepare->execute();
        $re = $prepare->get_result();
        while ($facturas[] = $re->fetch_array());
        $re->close();
        $prepare->close();
        $conn->close();             

$html = '<header class="clearfix">
      <div id="logo">
        <img src="images/logo.png">
      </div>
      
      <h1>FACTURA N° 0000'.$numeroventa.'</h1>
      <div id="company" class="clearfix">
        <div>Bycicles Parts</div>
        <div>Cra 119 A # 63 D 77,<br /> Colombia, Bogotá</div>
        <div>(057) 540-0206</div>
        <div><a href="index.php">partesbicicletas.com</a></div>
      </div>
      <div id="project">
        <div><span>NIT</span> 41.747.003 -8 </div>';
    $html .= '
        <div><span>CLIENTE</span> '.$nombres ." " . $apellidos.'</div>
        <div><span>CC</span> '.$documento.'</div>
        <div><span>DIRECCIÓN</span> '.$direccion.'</div>
        <div><span>EMAIL</span> <a href="mailto:'.$email.'">'.$email.'</a></div>
        <div><span>FECHA</span> '.date("d/m/Y").'</div>
        <div><span>HORA</span> '.date("h:i:s a").'</div> 
        </div>
        </header>';
    $html .='
        <main>
          <table>
            <thead>
              <tr>
                <th class="service">CÓDIGO</th>
                <th class="desc">DESCRIPCIÓN</th>
                <th>PRECIO</th>
                <th>CANTIDAD</th>
                <th>TOTAL</th>
              </tr>
            </thead>
            <tbody>';

    foreach ($facturas as $producto){

    $html .=  

        '<tr>
            <td class="service">'.$producto['codigo_producto'].'</td>
            <td class="desc"> '.$producto['producto'].'</td>
            <td class="unit">$'.$producto['precio'].'</td>
            <td class="qty">'.$producto['cantidad'].'</td>
            <td class="total">$'.$producto['subtotal'].'</td>
          </tr>';
        $total += $producto['subtotal']; 
    }

    $subtotal = round($total/1.19);
    $impuesto = round($total-$subtotal);

    $html .='
          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">$'.$subtotal.'</td>
          </tr>
          <tr>
            <td colspan="4">IMPUESTO 19%</td>
            <td class="total">$'.$impuesto.'</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAN TOTAL</td>
            <td class="grand total">$'.$total.'</td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTA:</div>
        <div class="notice">Esta factura se asimila en todos sus efectos a una letra de cambio, según  ART.774 del C. de C.</div>
      </div>
    </main>';

 unset($SESSION['usuario']);

$mpdf = new mPDF('c', 'A4');
$css = file_get_contents('css/pdf.css');
$mpdf->writeHTML($css, 1);
$mpdf->writeHTML($html);
$mpdf->Output('ventas.pdf', 'I');

?>