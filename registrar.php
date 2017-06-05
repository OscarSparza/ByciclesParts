<!DOCTYPE html>
<html lang="es"><!--Estructura-->

    <head>
        <title>Registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="css/estilosLogin.css">
        <link rel="stylesheet" href="css/fontello.css">
    </head>
    <body>
        <div class="contenedor">
            <form method="post" class="form_cuenta" action="control.php">
                <h2 class="form_titulo">Registro Usuario</h2>
                <div class="contenedor_inputs">
                    <input type="text" name="nombre" placeholder="Nombres" class="mitad" required>
                    <input type="text" name="apellido" placeholder="Apellidos" class="mitad" required>
                    <input type="tel" name="cedula" placeholder="Cedula" class="mitad" required>
                    <select name="tipo_usuario" id="tipo_usuario" class="mitad" required>
                    <option>Administrador</option>
                    <option>Cliente</option>                    
                    </select>
                    <input type="email" name="correo" placeholder="Correo" class="completo" required>
                    <input type="text" name="usuario" placeholder="Usuario" class="mitad" required>
                    <input type="password" name="contraseña" placeholder="Contraseña" class="mitad"  required>
                    <label for ="fecha" class="mitad">Fecha de Nacimiento </label>
                    <input type="date" name="fecha" id="fecha" class="mitad" required>                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Género<input type="radio" name="genero" value="masculino" class="genero" checked><br>Masculino
                    <input type="radio" name="genero" value="femenino"  class="genero"><br>Femenino
                    <input type="text" name="direccion" placeholder="Dirección" class="completo" required> 
                    <input type="tel" name="telefono" placeholder="Telefono" class="mitad">
                    <input type="tel" name="celular" placeholder="Celular" class="mitad" required>
                    <input type="text" name="barrio" placeholder="Barrio" class="mitad" required>
                    <input type="text" name="ciudad" placeholder="Ciudad" class="mitad" required>
                    <input type="submit" value="Registrar" name="registrar" class="btn-registrar"> 
                    <p class="form_link">¿Ya tienes una cuenta? <a href="index.php"> Ingresa Aqui </a></p>                         
                </div>
            </form>                          
        </div>
    </body>
</html>