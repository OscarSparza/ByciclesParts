<!DOCTYPE html>
<html lang="en">
<head>
    <title>Galería</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">
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
<body id="page3">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="index.php">Bicycles<span>Parts</span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="menu.php">Destacados</a></li>
                            <li><a class="active" href="catalogue.php">Galería </a></li>
                            <li><a href="shipping.php">Noticias</a></li>
                            <li><a href="contact.php">Contáctenos</a></li>
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
                	<h2>Productos <span>Disponibles</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="container">
            	<h3 class="prev-indent-bot">Repuestos</h3>
                <div id="slider-2">
                        <?php
                            require_once 'DataBase.php';
                            $db = new DataBase();
                            $db->conectar();
                            $re = $db->consultar("productos","");
                             while ($row=mysql_fetch_array($re)) {
                        ?>
                       <div class="repuestos">
                        <?php
                            $re = $db->consultarDato("productos","nombre","'cipollini'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/page3-ima1.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im1.jpg" alt=""></a></figure>
                            <h5>Cipollini</h5>
                            <p class="p1">Marco para bicicleta de ruta en carbono, T800 Rin 26, Talla M, tenedor, cuadro, cajas, dirección, codo y caña sillin.</p>
                            <p class="p2"><strong class="color-2">__________________________<!--Precio: $ 3.500.000--></strong></p>
                            <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Aros en carbono'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                        <div class="p4">
                        <figure><a class="lightbox-image" href="images/page3-ima2.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im2.jpg" alt=""></a></figure>
                        <h5>Aros en carbono </h5>
                        <p class="p1">Marca Reynolds para MTB 29" con manzana crossride trasera y delantera para suspencion lefty.</p>
                        <p class="p2"><strong class="color-2">__________________________<!--Precio: $ 1.600.000--></strong></p>
                        <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="repuestos">
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Suspension Vaxa'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                        <div class="p4">
                            <figure><a class="lightbox-image" href="images/page3-ima3.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im3.jpg" alt=""></a></figure>
                            <h5>Suspensión Vaxa</h5>
                            <p class="p1">29" IMPULSO 110 modelo también es 27,5" + compatible. IMPULSO 110 agrega 89g más de 15 x 100 .</p>
                            <p class="p2"><strong class="color-2">__________________________<!--Precio: $110.000--></strong></p>
                            <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Vielas Shimano'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                    <div class="p4">
                        <figure><a class="lightbox-image" href="images/page3-ima4.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im4.jpg" alt=""></a></figure>
                        <h5>Vielas Shimano</h5>
                        <p class="p1">Especialmente diseñado para bicicletas MTB, para 9 velocidades, estrella en aluminio, 44-22.</p>
                        <p class="p2"><strong class="color-2">__________________________<!--Precio: $350.000--></strong></p>
                        <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                    </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="repuestos">
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Marco Ridley'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/page3-ima9.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im9.jpg" alt=""></a></figure>
                            <h5>Marco Ridley</h5>
                            <p class="p1">Marco de carretera personalizable, en fibra de carbón, con un peso aproximado de 1120g en diferentes tamaños.</p>
                            <p class="p2"><strong class="color-2">__________________________<!--Precio: $2.200.000--></strong></p>
                            <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                        <div class="p4">
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Tenedor Aeronova'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                        <figure><a class="lightbox-image" href="images/page3-ima7.jpg"  data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im7.jpg" alt=""></a></figure>
                        <h5>Tenedor Aeronova</h5>
                        <p class="p1">Material: Fibra de Carbono, Color: Negro y Rojo, acabado: 3 K Brillante, peso:sobre 355±15g, Headset: 1-1/8".</p>
                        <p class="p2"><strong class="color-2">__________________________<!--Precio: $290.000--></strong></p>
                        <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="repuestos">
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Freno Y Palanca De Cambios'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/page3-ima10.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im10.jpg" alt=""></a></figure>
                            <h5>Freno Y Palanca De Cambios</h5>
                            <p class="p1">Cambio de velocidad 9, Palanca de freno integrado, Para los trenes de la unidad de Alivio/Acera/Altus.</p>
                            <p class="p2"><strong class="color-2">__________________________<!--Precio: $ 213.100--></strong></p>
                            <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Tensor Shimano Tourney'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                        <div class="p4">
                        <figure><a class="lightbox-image" href="images/page3-ima8.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im8.jpg" alt=""></a></figure>
                        <h5>Tensor Shimano Tourney </h5>
                        <p class="p1">Aluminio Cambios Bicicleta, Cadena plástico, Longitud de la jaula: largo, Velocidades de transmisión: 9.</p>
                        <p class="p2"><strong class="color-2">__________________________<!--Precio: $22.990--></strong></p>
                        <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="repuestos">
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Cipollini'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/page3-ima1.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im1.jpg" alt=""></a></figure>
                            <h5>Cipollini</h5>
                            <p class="p1">Marco para bicicleta de ruta en carbono, T800 Rin 26, Talla M, tenedor, cuadro, cajas, dirección, codo y caña sillin.</p>
                            <p class="p2"><strong class="color-2">__________________________<!--Precio: $ 3.500.000--></strong></p>
                            <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Marco de carbono Mosso'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                        <div class="p4">
                        <figure><a class="lightbox-image" href="images/page3-ima5.jpg"  data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im5.jpg" alt=""></a></figure>
                        <h5>Marco de carbono Mosso</h5>
                        <p class="p1"> Colores personalizables, tallas desde la 48 - 56, caja de pedal personalizada, peso aproximado de 1060g.</p>
                        <p class="p2"><strong class="color-2">__________________________<!--Precio: $1.900.000--></strong></p>
                        <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="repuestos">
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Aros en carbono'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/page3-ima2.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im2.jpg" alt=""></a></figure>
                        <h5>Aros en carbono </h5>
                        <p class="p1">Marca Reynolds para MTB 29" con manzana crossride trasera y delantera para suspencion lefty.</p>
                        <p class="p2"><strong class="color-2">__________________________<!--Precio: $ 1.600.000--></strong></p>
                        <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Aros Hope Tech Enduro'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                        <div class="p4">
                        <figure><a class="lightbox-image" href="images/page3-ima6.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im6.jpg" alt=""></a></figure>
                        <h5>Aros Hope Tech Enduro</h5>
                        <p class="p1">Para bicicletas de montaña, Compatible con manzanas Shimano, Diseño aerodinámico, Colores negro y blanco.</p>
                        <p class="p2"><strong class="color-2">__________________________<!--Precio: $1.200.000--></strong></p>
                        <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="repuestos">
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Marco Ridley'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/page3-ima9.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im9.jpg" alt=""></a></figure>
                            <h5>Marco Ridley</h5>
                            <p class="p1">Marco de carretera personalizable, en fibra de carbón, con un peso aproximado de 1120g en diferentes tamaños.</p>
                            <p class="p2"><strong class="color-2">__________________________<!--Precio: $2.200.000--></strong></p>
                            <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Tenedor Aeronova'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                        <div class="p4">
                        <figure><a class="lightbox-image" href="images/page3-ima7.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im7.jpg" alt=""></a></figure>
                        <h5>Tenedor Aeronova</h5>
                        <p class="p1">Material: Fibra de Carbono, Color: Negro y Rojo, acabado: 3 K Brillante, peso:sobre 355±15g, Headset: 1-1/8".</p>
                        <p class="p2"><strong class="color-2">__________________________<!--Precio: $290.000--></strong></p>
                        <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="repuestos">
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Freno Y Palanca De Cambios'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/page3-ima10.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im10.jpg" alt=""></a></figure>
                            <h5>Freno Y Palanca De Cambios</h5>
                            <p class="p1">Cambio de velocidad 9, Palanca de freno integrado, Para los trenes de la unidad de Alivio/Acera/Altus.</p>
                            <p class="p2"><strong class="color-2">__________________________<!--Precio: $ 213.100--></strong></p>
                            <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Vielas Shimano'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                        <div class="p4">
                        <figure><a class="lightbox-image" href="images/page3-ima4.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im4.jpg" alt=""></a></figure>
                        <h5>Vielas Shimano</h5>
                        <p class="p1">Especialmente diseñado para bicicletas MTB, para 9 velocidades, estrella en aluminio, 44-22.</p>
                        <p class="p2"><strong class="color-2">__________________________<!--Precio: $350.000--></strong></p>
                        <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="repuestos">
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Cipollini'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/page3-ima1.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im1.jpg" alt=""></a></figure>
                            <h5>Cipollini</h5>
                            <p class="p1">Marco para bicicleta de ruta en carbono, T800 Rin 26, Talla M, tenedor, cuadro, cajas, dirección, codo y caña sillin.</p>
                            <p class="p2"><strong class="color-2">__________________________<!--Precio: $ 3.500.000--></strong></p>
                            <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Tensor Shimano Tourney'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                        <div class="p4">
                        <figure><a class="lightbox-image" href="images/page3-ima8.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im8.jpg" alt=""></a></figure>
                        <h5>Tensor Shimano Tourney </h5>
                        <p class="p1">Aluminio Cambios Bicicleta, Cadena plástico, Longitud de la jaula: largo, Velocidades de transmisión: 9.</p>
                        <p class="p2"><strong class="color-2">__________________________<!--Precio: $22.990--></strong></p>
                        <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="repuestos">
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Aros en carbono'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                    	<div class="p4">
                            <figure><a class="lightbox-image" href="images/page3-ima2.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im2.jpg" alt=""></a></figure>
                        <h5>Aros en carbono </h5>
                        <p class="p1">Marca Reynolds para MTB 29" con manzana crossride trasera y delantera para suspencion lefty.</p>
                        <p class="p2"><strong class="color-2">__________________________<!--Precio: $ 1.600.000--></strong></p>
                        <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                            $re = $db->consultarDato("productos","nombre","'Freno Y Palanca De Cambios'");
                            while ($row=mysql_fetch_array($re)) {                            
                        ?>
                        <div class="p4">
                        <figure><a class="lightbox-image" href="images/page3-ima10.jpg" data-gal="prettyPhoto[prettyPhoto]"><img src="images/page3-im10.jpg" alt=""></a></figure>
                            <h5>Freno Y Palanca De Cambios</h5>
                            <p class="p1">Cambio de velocidad 9, Palanca de freno integrado, Para los trenes de la unidad de Alivio/Acera/Altus.</p>
                            <p class="p2"><strong class="color-2">__________________________<!--Precio: $ 213.100--></strong></p>
                        <a class="button-1" href="detalleProducto.php?id=<?php echo $row['codigo_producto'];?>">Ver Producto</a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                        <?php
                            }
                        ?>
                </div>
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

</body>
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
    <script src="js/hover-image.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>  
    <script src="js/jquery.bxSlider.js" type="text/javascript"></script> 
    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(document).ready(function() {
			$('#slider-2').bxSlider({
				pager: true,
				controls: false,
				moveSlideQty: 1,
				displaySlideQty: 4
			});
			$("a[data-gal^='prettyPhoto']").prettyPhoto({theme:'facebook'});
		}); 
	</script>
</html>
