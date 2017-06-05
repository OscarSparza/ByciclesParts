<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <title>Tabla Clientes</title>

        <link rel="stylesheet" type="text/css" href="css/estiloTabla.css">
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">
    </head>

    <body> 
        <div id = contenedor_prin>
            <div id=header>
                <div id="titulo">
                    <b>Bycicles<span>Parts</span></b>
                </div>
            </div>

            <nav class="nav" id="nav">
                <ul id="menu">
                    <li id="menu__item"><a class="menu__link seleccionada" href="tablaUsuarios.php">Usuarios</a></li>
                    <li id="menu__item"><a class="menu__link " href="tablaProducto.php">Productos</a></li>
                    <li id="menu__item"><a class="menu__link " href="factura.php?opcion=<?php  echo $opcion="cerrarSesion"; ?>" >Cerrar sesión</a></li>
                </ul>
            </nav>

            <br><div class="container">

                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="clientes">

                    <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Apelllido</th>
                            <th>Tipo Usuario</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Celular</th>
                            <th>Barrio</th>
                            <th>Dirección</th>
                            <th>Correo</th>
                            <th>Ciudad</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        require_once 'Database.php';
                        $db = new Database();
                        $db->conectar();
                        $result = $db->consultar("usuarios", "");

                        while ($row = mysql_fetch_row($result)) {
                            echo "<td><a href='editarUsuarios.php?documento_cliente=$row[0]'>$row[0]</a></td>";
                            echo '</form>';
                            echo "<td>$row[1]</td>";
                            echo "<td>$row[2]</td>";
                            echo "<td>$row[3]</td>";
                            echo "<td>$row[6]</td>";
                            echo "<td>$row[9]</td>";
                            echo "<td>$row[10]</td>";
                            echo "<td>$row[11]</td>";
                            echo "<td>$row[12]</td>";
                            echo "<td>$row[13]</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
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
    </body>
            <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/dataTables.bootstrap.js"></script>

        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#clientes').dataTable();
            });
        </script>
</html>