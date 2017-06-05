<?php
$documento;
$nombres;   
     $db = new DataBase();
    $db->conectar();
  $re=mysql_query("select * from usuarios WHERE usuario = " ."'$documento' " ) or die(mysql_error());
        while ($row=mysql_fetch_array($re)) {
            
        $documento=$row['documento_cliente'];
        $nombres=$row['nombres'];        
    }
$message="<xml><cc>".$documento."</cc><nombre>".$nombres."</nombre><xml>";
?>