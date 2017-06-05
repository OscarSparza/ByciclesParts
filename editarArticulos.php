
<!DOCTYPE html>
<html lang="es"><!--Estructura-->

    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="css/fontello1.css">
        <link rel="stylesheet" href="css/estilosArticulos.css">
        
    </head>
    <body>
        <div id="page-wrapper">   
            <div id=header>
                <div id="titulo">
                    <b>Bycicles<span>Parts</span></b>
                </div>
            </div>

            <nav class="nav" id="nav">
                <ul id="menu">
                   <li id="menu__item"><a class="menu__link seleccionada" href="editarArticulos.php">Editar Productos</a></li>
                    <li id="menu__item"><a class="menu__link " href="tablaProducto.php">Productos</a></li>
                    <li id="menu__item"><a class="menu__link " href="tablaUsuarios.php">Usuarios</a></li>
                    <li id="menu__item"><a class="menu__link " href="factura.php?opcion=<?php  echo $opcion="cerrarSesion"; ?>" >Cerrar sesión</a></li>
                </ul>
            </nav>   
            <div class="contenedor_prin">
                <?php
                require_once 'DataBase.php';
                $db = new DataBase();
                $db->conectar();
                ?> 
                <?php $codigo_producto = $_GET['codigo_producto']; ?>
                <form name="productos" enctype="multipart/form-data" method="post" action=<?php echo "control.php?codigo_producto=" . $codigo_producto . "" ?>> 
                    <div id="paso1">
                       <h1 class="subtitulo">Productos</H1>
                        <fieldset ><legend >Detalle</legend>             

                    <!--****************Productos******************--> 
                        <?php
                        $res = mysql_query("SELECT * FROM productos WHERE codigo_producto = " . $codigo_producto . ";");
                        while ($row = mysql_fetch_row($res)) {
                            ?>
                                    <div id="columna1paso2">
                                        <?php
                                            if (file_exists("images/productos/" . $codigo_producto . ".jpg")) {
                                                echo "<div class=" . "foto" . "><img src=" . "images/productos/" . $codigo_producto . ".jpg" . "> </div>";
                                            }
                                            if (file_exists("images/productos/" . $codigo_producto . ".gif")) {
                                                echo "<div class=" . "foto" . "><img src=" . "images/productos/" . $codigo_producto . ".gif" . "> </div>";
                                            }
                                            if (file_exists("images/productos/" . $codigo_producto . ".jpeg")) {
                                                echo "<div class=" . "foto" . "><img src=" . "images/productos/" . $codigo_producto . ".jpeg" . "> </div>";
                                            }
                                        ?><br>
                                        <input type="file" name="editar_archivo" id="editar_archivo">

                                    </div>
                                    <div id="columna2paso2">
                                        <label for="nombre">Nombre: </label><label class="ast">*</label><br><br>
                                        <label for="cantidad">Cantidad: </label><label class="ast">*</label><br><br>
                                        <label for="cantidad">Valor:</label><label class="ast">*</label><br><br>
                                        <label for="descripcion">Descripción:</label><label class="ast">*</label><br><br>
                                    </div>
                                    <div id="columna3paso2">
                                        <input type="text" value=<?php echo "$row[1]"; ?> name="nombre" id="nombre"  required ><br><br>
                                        <input type="text" value=<?php echo "$row[3]"; ?> name="cantidad" id="cantidad"  required ><br><br>
                                        <input type="text" value=<?php echo "$row[4]"; ?> name="valor" id="valor"  required ><br><br>
                                        <textarea name="descripcion" id="descripcion"  required ><?php echo "$row[2]"; ?></textarea> <br><br><br>
                                    </div>                                               
                                <?php } ?>
                        </fieldset><br> 
                        <div id="icono1">
                            <h1 class="icon-renovar"></h1>
                        </div>
                        <div id="boton1">
                            <INPUT  name="actualizarProducto" type="submit" id="actualizarProducto" class="btn" value="Actualizar Producto">
                        </div>
                        <div id="icono3">
                            <a href="#modal2" class="icon-carrito"></a>
                        </div>
                        
                        <div id="boton3">
                            <label for="agregar" class="usuario"> Agregar Producto </label>
                        </div>
                        <div id="boton2">
                            <INPUT  name="eliminarProducto" type="submit" id="eliminarProducto" class="btn" value="Eliminar Producto">
                        </div>
                        <div id="icono2">
                            <h1 class="icon-cesta"></h1>                       
                        </div>
                    </div>                        
                </form>
                           
                
                <!--****************Registrar Usuarios******************-->
                
            <div id="modal2" class="modalmask">
                <div class="modalbox movedown">
                    <a href="#close" title="Cerrar" class="close">X</a>
                    <div class="perfil">
                         <form name="productos" enctype="multipart/form-data" method="post" action="control.php"> 
                        <div id="paso2">
                           <h1 class="subtitulo">Productos</H1>
                            <fieldset ><legend >Datos</legend>             

                        <!--****************Productos******************--> 
                                <div id="columna1paso2">
                                  <div id="fotografia">
                                      
                                  </div>
                                   <br><br><br><br><br><br><br><br><br><br>
                                    <input type="file" name="archivo" id="archivo">
                                </div>

                                <div id="columna2paso2">
                                    <label for="nombre">Nombre: </label><label class="ast">*</label><br><br>
                                    <label for="cantidad">Cantidad: </label><label class="ast">*</label><br><br>
                                    <label for="cantidad">Valor:</label><label class="ast">*</label><br><br>
                                    <label for="cantidad">Descripción:</label><br><br>
                                </div>

                                <div id="columna3paso2">
                                    <input type="text" name="nombre" id="nombre"  required ><br><br>
                                    <input type="text" name="cantidad" id="cantidad"  required ><br><br>
                                    <input type="text" name="valor" id="valor"  required ><br><br>
                                    <textarea name="detalle" id="detalle"  required ></textarea> <br><br><br>
                                </div>                                               
                            </fieldset><br> 
                        <div id="icono4">
                            <h1 class="icon-ok"></h1>
                        </div>
                        <div id="boton4">
                            <INPUT  name="registrarProducto" type="submit" id="registrarProducto" class="btn" value="Registrar Producto">
                        </div>
                        <div id="boton5">
                            <INPUT  name="back" type="submit" id="back" class="btn" value="Volver">
                        </div>
                        <div id="icono5">
                            <h1 class="icon-atras"></h1>
                        </div> 
                        </div>                        
                    </form>
                    
                    </div>
                </div>
            </div>              
        </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>