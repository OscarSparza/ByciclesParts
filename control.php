<?php

session_start();

require_once 'DataBase.php';
require_once "recaptchalib.php";


if (isset($_POST['registrar'])) {
    $db = new DataBase();
    $db->conectar();
    $db->insertar(array($_POST['cedula'], $_POST['nombre'], $_POST['apellido'], $_POST['tipo_usuario'], $_POST['usuario'], $_POST['contraseña'], $_POST['fecha'], $_POST['genero'], $_POST['telefono'], $_POST['celular'], $_POST['barrio'], $_POST['direccion'], $_POST['correo'], $_POST['ciudad']), 'usuarios');
    require 'index.php';
}
if (isset($_POST['inscribir'])) {
    $db = new DataBase();
    $db->conectar();
    $db->insertar(array($_POST['documento_cliente'], $_POST['nombre'], $_POST['apellido'], $_POST['tipo_usuario'], $_POST['usuario'], $_POST['contraseña'], $_POST['fecha'], $_POST['genero'], $_POST['telefono'], $_POST['celular'], $_POST['barrio'], $_POST['direccion'], $_POST['correo'], $_POST['ciudad']), 'usuarios');
    require 'tablaUsuarios.php';
}

if (isset($_POST['ingresar'])) {
    $_SESSION['usuario']=$_POST['usuario'];
    foreach ($_POST as $key => $value) {
    echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
    }
    $db = new DataBase();
    $db->conectar();
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];

    // your secret key
    $secret = "6LcuqhsUAAAAAF3O0xB55rqsxqxbbqm5ojR4KvTe";
    // empty response
    $response = null;
    // check secret key
    $reCaptcha = new ReCaptcha($secret);
    
    
    if(!empty($usuario)){
       
        $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND  clave = '$clave'";
        $resultado = mysql_query($consulta);
        while ($row=mysql_fetch_array($resultado)) {           
            $tusuario=$row['tipo_usuario'];
        }
        $filas = mysql_num_rows($resultado);
        if($filas>0){

            if ($_POST["g-recaptcha-response"]) {
                $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"],$_POST["g-recaptcha-response"]);
                if($tusuario == "Cliente"){
                    print '<script language="JavaScript">'; 
                    print 'alert(" Validacion exitosa ");'; 
                    print '</script>';
                    header("location:menu.php");
                }else{
                    print '<script language="JavaScript">'; 
                    print 'alert(" Validacion exitosa ");'; 
                    print '</script>';
                    header("location:tablaUsuarios.php");
            }
            }else{
                print '<script language="JavaScript">'; 
                print 'alert(" Recuerda validar el reCaptcha");'; 
                print '</script>';
                header("location:index.php");         
            }

        }
        else{
            
            print '<script language="JavaScript">'; 
            print 'alert("Error en la autentificacion");'; 
            print '</script>';
            header("location:index.php"); 
            }
    }else{   
       
    print '<script language="JavaScript">'; 
    print 'alert("Error en la autentificacion");'; 
    print '</script>';  
    header("location:index.php"); 
     }
}

if (isset($_POST['enviarContacto'])) {
    $db = new DataBase();
    $db->conectar();
    $db->insertar(array( " ",$_POST['cedula'], $_POST['nombre'], $_POST['correo'], $_POST['mensaje']), 'contacto');
    require 'menu.php';
}

if (isset($_POST['registrarProducto'])) {
    $db = new DataBase();
    $db->conectar();
    $archivo = $_FILES['archivo'];
    $extension = $archivo['name'];
    $db->insertar(array(" ", $_POST['nombre'], $_POST['detalle'], $_POST['cantidad'], $_POST['valor'], $extension), 'productos');
    require 'tablaProducto.php';
}

if (isset($_POST['actualizarProducto'])) {
    $db = new DataBase();
    $db->conectar();
    $editar_foto=false;
    $editar_foto = (isset($_FILES['editar_archivo'])) ? $_FILES['editar_archivo'] : null;
    if ($editar_foto) {

        if (file_exists("../images/productos/" . $_GET['codigo_producto'] . ".jpg")) {
            unlink("../images/productos/" . $_GET['codigo_producto'] . ".jpg");
        }
        if (file_exists("../images/productos/" . $_GET['codigo_producto'] . ".gif")) {
            unlink("../images/productos/" . $_GET['codigo_producto'] . ".gif");
        }
        if (file_exists("../images/productos/" . $_GET['codigo_producto'] . ".jpeg")) {
            unlink("../images/productos/" . $_GET['codigo_producto'] . ".jpeg");
        }

        $extension = pathinfo($editar_foto['name'], PATHINFO_EXTENSION);
        $extension = strtolower($extension);
        $extension_correcta = ($extension == 'jpg' or $extension == 'jpeg' or $extension == 'gif' or $extension == 'png');
        if ($extension_correcta) {
            $ruta_destino_archivo = "../images/productos/{$_POST['codigo_producto']}.{$extension}";
            $archivo_ok = move_uploaded_file($editar_foto['tmp_name'], $ruta_destino_archivo);
        }
    }
        if (file_exists("../images/productos/" . $_GET['codigo_producto'] . ".jpg")) {
            print '<script language="JavaScript">'; 
            print 'alert("hola mundo");'; 
            print '</script>'; 
            rename("../images/productos/" . $_GET['codigo_producto'] . ".jpg", "../images/productos/" . $_POST['codigo_producto'] . ".jpg");
        }
        if (file_exists("../images/productos/" . $_GET['codigo_producto'] . ".gif")) {
            rename("../images/productos/" . $_GET['id'] . ".gif", "../images/productos/" . $_POST['codigo_producto'] . ".gif");
        }
        if (file_exists("../images/productos/" . $_GET['codigo_producto'] . ".jpeg")) {
            rename("../images/productos/" . $_GET['codigo_producto'] . ".jpeg", "../images/productos/". $_POST['codigo_producto'] . ".jpeg");
        }
    
    $db->modificarProductos($_GET['codigo_producto'], array(" ", $_POST['nombre'], $_POST['descripcion'], $_POST['cantidad'], $_POST['valor'], " " ), 'productos');
    require 'tablaProducto.php';
}

if (isset($_POST['eliminarProducto'])) {
    $db = new DataBase();
    $db->conectar();
    $db->eliminarProducto($_GET['codigo_producto']);
    header('Location: tablaProducto.php');
}

if (isset($_POST['actualizarCliente'])) {
    $db = new DataBase();
    $db->conectar();
    $db->modificarClientes($_GET['id'], array($_POST['documento_cliente'],$_POST['nombre'], $_POST['apellidos'], $_POST['tipo_usuario'], $_POST['usuario'], $_POST['contraseña'], $_POST['fecha'],  $_POST['genero'],  $_POST['telefono'],  $_POST['celular'], $_POST['barrio'], $_POST['direccion'], $_POST['correo'], $_POST['ciudad']), 'usuarios');    
    header('Location: tablaUsuarios.php');
}

if (isset($_POST['eliminarCliente'])) {
    $db = new DataBase();
    $db->conectar();
    $db->eliminarCliente($_GET['id']);
    header('Location: tablaUsuarios.php');
}


?>

