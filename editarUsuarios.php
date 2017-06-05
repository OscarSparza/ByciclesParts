
<!DOCTYPE html>
<html lang="es"><!--Estructura-->

    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="css/fontello1.css">
        <link rel="stylesheet" href="css/estilosUsuarios.css">
        
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
                   <li id="menu__item"><a class="menu__link seleccionada" href="editarUsuarios.php">Editar Usuarios</a></li>
                    <li id="menu__item"><a class="menu__link " href="tablaUsuarios.php">Usuarios</a></li>
                    <li id="menu__item"><a class="menu__link " href="tablaProducto.php">Productos</a></li>
                    <li id="menu__item"><a class="menu__link " href="factura.php?opcion=<?php  echo $opcion="cerrarSesion"; ?>" >Cerrar sesión</a></li>
                </ul>
            </nav>   
            <div class="contenedor_prin">
                <?php
                require_once 'DataBase.php';
                $db = new DataBase();
                $db->conectar();
                ?> 
                <?php $documento_cliente = $_GET['documento_cliente']; ?>
                <form name="clientes" method="post" action=<?php echo "control.php?id=" . $documento_cliente . "" ?>> 
                    <div id="paso1">
                       <h1 class="subtitulo">Usuarios</H1>
                        <fieldset ><legend >Datos</legend>             

                    <!--****************Usuarios******************--> 
                        <?php
                        $res = mysql_query("SELECT * FROM usuarios WHERE documento_cliente = " . $documento_cliente . ";");
                        while ($row = mysql_fetch_row($res)) {
                            ?>
                                    <div id="columna1paso1">
                                        <label for="documento_cliente">Documento Cliente: </label><label class="ast">*</label><br><br>
                                        <label for="nombre">Nombres: </label><label class="ast">*</label><br><br>
                                        <label for="Apellidos">Apellidos: </label><label class="ast">*</label><br><br>
                                        <label for="tipo_usuario">Tipo Usuario: </label><label class="ast">*</label><br><br>
                                        <label for="usuario">Usuario: </label><label class="ast">*</label><br>
                                        <label for="contraseña">Contraseña: </label><label class="ast">*</label><br><br>
                                        <Label for="fecha">Fecha Nacimiento: </label><label class="ast">*</label><br><br>
                                    </div>
                                    <div id="columna2paso1">
                                        <input type="text" value=<?php echo "$row[0]"; ?> name="documento_cliente" id="documento_cliente"  required ><br><br>
                                        <input type="text" value=<?php echo "$row[1]"; ?> name="nombre" id="nombre"  required ><br><br><br>
                                        <input type="text" value=<?php echo "$row[2]"; ?> name="apellidos" id="apellidos"  required ><br><br>
                                        <input type="text" value=<?php echo "$row[3]"; ?> name="tipo_usuario" id="tipo_usuario"  required ><br><br>
                                        <input type="text" value=<?php echo "$row[4]"; ?> name="usuario" id="usuario"  required ><br><br>
                                        <input type="text" value=<?php echo "$row[5]"; ?> name="contraseña" id="contraseña"  required ><br><br>
                                        <input type="date" value=<?php echo "$row[6]"; ?> name="fecha" id="fecha" required><br><br>
                                    </div>
                                    <div id="columna3paso1">
                                        <label for="genero">Género: </label><label class="ast">*</label><br><br>
                                        <label for="telefono">Teléfono: </label><label class="ast">*</label><br><br> 
                                        <label for="celular">Celular: </label><label class="ast">*</label><br><br> 
                                        <label for="barrio">Barrio: </label><label class="ast">*</label><br><br>
                                        <label for="direccion">Dirección:</label><label class="ast">*</label><br><br>             <label for="correo">Correo Eléctronico: </label><label class="ast">*</label><br><br>
                                        <label for="ciudad">Ciudad: </label><label class="ast">*</label><br><br>
                                    </div>
                                    <div id="columna4paso1">
                                        <input type="text" value=<?php echo "$row[7]"; ?> name="genero" id="genero"  required ><br><br><br>
                                        <input type="tel" value=<?php echo "$row[8]"; ?> name="telefono"  id="telefono" required><br><br>
                                        <input type="celular" value=<?php echo "$row[9]"; ?> name="celular"  id="celular" required><br><br>
                                        <input type="text" value=<?php echo "$row[10]"; ?> name="barrio" id="barrio"  required ><br><br><br>
                                        <INPUT type="text" value=<?php echo "$row[11]"; ?> name="direccion" id="direccion"  required><br><br>
                                        <input type="email" name="correo" value=<?php echo "$row[12]"; ?> name="correo" id="correo" required><br><br>
                                        <input type="text" value=<?php echo "$row[13]"; ?> name="ciudad" id="ciudad"  required ><br><br><br>
                                    </div>                                                 
                                <?php } ?>
                        </fieldset><br> 
                        <div id="icono1">
                            <h1 class="icon-actualizar"></h1>
                        </div>
                        <div id="boton1">
                            <INPUT  name="actualizarCliente" type="submit" id="actualizarCliente" class="btn" value="Actualizar Usuario">
                        </div>
                        <div id="icono3">
                            <a href="#modal2" class="icon-agregar"></a>
                        </div>
                        
                        <div id="boton3">
                            <label for="agregar" class="usuario"> Agregar Usuario </label>
                        </div>
                        <div id="boton2">
                            <INPUT  name="eliminarCliente" type="submit" id="eliminarCliente" class="btn" value="Eliminar Usuario">
                        </div>
                        <div id="icono2">
                            <h1 class="icon-eliminar"></h1>                       
                        </div>
                    </div>                        
                </form>
                           
                
                <!--****************Registrar Usuarios******************-->
                
            <div id="modal2" class="modalmask">
                <div class="modalbox movedown">
                    <a href="#close" title="Cerrar" class="close">X</a>
                    <div class="perfil">

            <form name="agregar" method="post" action="control.php">
                <div id="paso2">
                   <h1 class="subtitulo">Registro</H1>
                    <fieldset ><legend >Usuario</legend>              
                    
                    <?php
                    $res = mysql_query("SELECT * FROM usuarios WHERE documento_cliente = " . $documento_cliente . ";");
                    while ($row = mysql_fetch_row($res)) {
                    ?>
                                   
                    <div id="columna1paso1">
                        <label for="documento_cliente">Documento Cliente: </label><label class="ast">*</label><br><br>
                        <label for="nombre">Nombres: </label><label class="ast">*</label><br><br>
                        <label for="Apellidos">Apellidos: </label><label class="ast">*</label><br><br>
                        <label for="tipo_usuario">Tipo Usuario: </label><label class="ast">*</label><br><br>
                        <label for="usuario">Usuario: </label><label class="ast">*</label><br>
                        <label for="contraseña">Contraseña: </label><label class="ast">*</label><br><br>
                        <Label for="fecha">Fecha Nacimiento: </label><label class="ast">*</label><br><br>
                    </div>
                    
                    <div id="columna2paso1">
                        <input type="text" name="documento_cliente" id="documento_cliente"  required ><br><br>
                        <input type="text"  name="nombre" id="nombre"  required ><br><br><br>
                        <input type="text"  name="apellido" id="apellido"  required ><br><br>
                        <select name="tipo_usuario" id="tipo_usuario" class="mitad" required>
                            <option>Administrador</option>
                                    <option>Cliente</option>                    
                            </select><br><br>
                        <input type="text"  name="usuario" id="usuario"  required ><br><br>
                        <input type="text"  name="contraseña" id="contraseña"  required ><br><br>
                        <input type="date"  name="fecha" id="fecha" required><br><br>
                    </div>
                                    
                    <div id="columna3paso1">
                        <label for="genero">Género: </label><label class="ast">*</label><br><br>
                        <label for="telefono">Teléfono: </label><label class="ast">*</label><br><br> 
                        <label for="celular">Celular: </label><label class="ast">*</label><br><br> 
                        <label for="barrio">Barrio: </label><label class="ast">*</label><br><br>
                        <label for="direccion">Dirección:</label><label class="ast">*</label><br><br>            <label for="correo">Correo Eléctronico: </label><label class="ast">*</label><br><br>
                        <label for="ciudad">Ciudad: </label><label class="ast">*</label><br><br>
                    </div>
                          
                    <div id="columna4paso1">
                        <input type="radio" name="genero" value="masculino" class="genero" checked>Masculino<br>
                        <input type="radio" name="genero" value="femenino"  class="genero">Femenino<br><br>
                        <input type="tel"  name="telefono"  id="telefono" required><br><br>
                        <input type="celular"  name="celular"  id="celular" required><br><br>
                        <input type="text"  name="barrio" id="barrio"  required ><br><br><br>
                        <INPUT type="text"  name="direccion" id="direccion"  required><br><br>
                        <input type="email" name="correo"  name="correo" id="correo" required><br><br>
                        <input type="text"  name="ciudad" id="ciudad"  required ><br><br><br>
                    </div>  
                                                                                   
                    <?php } ?>
                                
                    </fieldset><br> 
                        <div id="icono4">
                            <h1 class="icon-agregar"></h1>
                        </div>
                        <div id="boton4">
                            <INPUT  name="inscribir" type="submit" id="inscribir" class="btn" value="Registrar Usuario">
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
                

            <!--div class="contenedor">
			    <a href="#openmodal" class="open">Abrir Ventana</a>
                    <section id="openmodal" class="modalDialog">
                        <section class="modal">
                            <a href="#close" class="close"> X </a>
                            <h2> Ventana Modal</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati architecto quaerat, facere blanditiis, tempora sequi?</p>
                        </section>
                    </section>
		    </div>-->
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
    <script type="text/javascript" src="js/efecto.js"> </script>
    <script type="text/javascript" src="js/jquery.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>