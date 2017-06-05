<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacto</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">  
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
</head>
<body id="page6">
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
                            <li><a class="active" href="contact.php">Contáctenos</a></li>
                            <li><a href="./faq.php" title="ver carrito de compras"><img src="./images/carrito.png"></a></li>
                            <li><a href="factura.php?opcion=<?php  echo $opcion="cerrarSesion"; ?>" >Cerrar sesión</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Nuestra <span>Localizacion</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper">
            	<article class="col-1">
                	<div class="indent-left">
                    	<h3 class="p1">Nuestra Ubicación</h3>
                        <figure class="indent-bot">
                            <iframe width="240" height="180" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Engativ%C3%A1,+Bogota,+Colombia&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=4.7181552,-74.1149872&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                        </figure>
                        <dl>
                            <dt class="p1">Colombia 2017 Bogotá, Engativa </dt>
                            <dd><span>Línea Nacional:</span>  +01 8000 2020 1256</dd>
                            <dd><span>Teléfono:</span>  +57 322 875 2574</dd>
                            <dd><span>Fax:</span>  +1 800 889 9898</dd>
                            <dd><span>Email:</span><a class="color-2" href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=12&ct=1413508929&rver=6.4.6456.0&wp=MBI_SSL_SHARED&wreply=https:%2F%2Fmail.live.com%2Fdefault.aspx%3Fmkt%3Des&lc=2058&id=64855&mkt=es-US&cbcxt=mai">oscarsparza26@hotmail.com</a></dd>
                        </dl>
                    </div>
                </article>
                <article class="col-2">
                	<h3 class="p1">Contacto</h3>
                    <form id="contact-form" method="post" action="control.php"> 
                       <!--php
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
                                                $email=$row['correo'];  
                                            }    
                                    } 
                                    
                                    ?php echo $nombres ." " .$apellidos;?>
                                    ?php echo $documento;?>
                                    ?php echo $email;?>
                        ?>-->                   
                        <fieldset>
                              <label><span class="text-form">Nombre:</span><input type="text" name="nombre" required></label>                           
                              <label><span class="text-form">CC:</span> <input type="tel" name="cedula" required></label> 
                              
                              <label><span class="text-form">Email:</span><input type="email" name="correo" required></label>                              
                              <div class="wrapper">
                                <div class="text-form">Mensaje:</div>
                                <div class="extra-wrap">
                                    <textarea name="mensaje" required></textarea>
                                    <div class="clear"></div>
                                    <div class="buttons">
                                     <input type="submit"  name="enviarContacto" value="Enviar">
                                    <a class="button-2" onClick="document.getElementById('contact-form').reset()">Limpiar</a>
                                        
                                    </div> 
                                </div>
                              </div>                            
                        </fieldset>						
                    </form>
                </article>
            </div>
        </div>
    </section>
    
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
</body>
</html>
