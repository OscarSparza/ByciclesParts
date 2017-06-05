<?php
 
// grab recaptcha library
require_once "recaptchalib.php";
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Articulos Bicicletas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="css/estilosLogin.css" type="text/css">    
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
<body id="page1">
	<!--==============================header=================================-->
    <header>

        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Bicycles <span>Parts</span></h2>
                    <div class="slider-wrapper">
                        <div class="slider">
                            <ul class="items">
                                <li>
                                    <img src="images/slider-img3.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="images/slider-img2.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="images/slider-img1.jpg" alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
   <main>
    <div id="formulario">
        <form method="post" action="control.php">
            <h2>Login</h2>
            <input type="text" placeholder=" &#128272; Usuario" name="usuario">
            <input type="password" placeholder=" &#128272; Contraseña" name="clave">
            <center><div class="g-recaptcha" data-sitekey="6LcuqhsUAAAAAE0MS6_Rbpo3lXMFQRH5-AYhMSp_" data-theme="dark"></div></center>
            <input type="submit" value="Ingresar" name="ingresar">
            <p class="form_link">¿No tienes una cuenta? <a href="registrar.php"> Ingresa Aqui </a></p>

        </form>
    </div>
    </main>
    
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
        </div>
    </footer>
</body>
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/tms-0.3.js" type="text/javascript"></script>
    <script src="js/tms_presets.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.equalheights.js" type="text/javascript"></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script> 
    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'slideDown',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:true,
				pagNums:false
			});
		});
    </script>
</html>
