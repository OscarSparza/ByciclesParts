<!DOCTYPE html>
<html lang="en">
<head>
    <title>Producto</title>
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
<body>
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="index.php">Bicycles<span>Parts</span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a class="active" href="detalleProducto.php">Producto</a></li>
                            <li><a href="catalogue.php">Galeria </a></li>
                            <li><a href="./faq.php" title="ver carrito de compras"><img src="./images/carrito.png"></a></li>
                            <li><a href="factura.php?opcion=<?php  echo $opcion="cerrarSesion"; ?>" >Cerrar sesion</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Detalles del Producto</h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <div class="container1">
                
            <?php
                require_once 'DataBase.php';
                $db = new DataBase();
                $db->conectar();
                $re = $db->consultarDato("productos","codigo_producto",$_GET['id']);
                echo $_GET['id'];
                while ($row=mysql_fetch_array($re)) {
            ?>
            <h2><span><?php echo $row['nombre'];?></span></h2>
            <div class="ima">           
             <center><img src="./images/productos/<?php echo $row['imagen'];?>"></center>
             </div>
             <div class="descripcion">
             <h3>Descripción:</h3>
            <p> <?php echo $row['descripcion'];?></p>
            <h3>Valor:</h3>
            <p> $ <?php echo $row['valor'];?></p>
                                 
            <center><a class="button-1" href="faq.php?id=<?php echo $row['codigo_producto'];?>">Comprar</a></center>
            </div>

            <?php
                }
            ?>

    </div>

    
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
