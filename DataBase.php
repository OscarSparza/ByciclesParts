<?php

class DataBase {

    private $usuario;
    private $contraseña;
    private $servidor;
    private $nomBD;
    private $link;

    function DataBase() {
        $this->usuario = "root";
        $this->contraseña = "enero6210";
        $this->servidor = "localhost";
        $this->nomBD = "ventas";
        $this->link = "";
    }

    function conectar() {
        $this->link = mysql_connect($this->servidor, $this->usuario, $this->contraseña);
        mysql_select_db($this->nomBD);
        /* echo "conectamos"; */
    }

    function insertar($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . "'" . $val . "', ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysql_query('insert into ' . $tabla . ' values (' . $valoresFila . ');') or die('La consulta fallo' . mysql_error());
    }

    function consultar($tabla = "", $campo = "") {
        if ($campo == "") {
            $query = "select * from " . $tabla;
        } else {
            $query = "select " . $campo . " from " . $tabla;
        }
        $res = mysql_query($query);
        return $res;
    }
          
    function consultarDato($tabla = "", $campo = "", $dato = "") {

        $query = "select * from " . $tabla . " where " . $campo . " = " . $dato;
        $res = mysql_query($query);
        return $res;
    }
    
    function consultarOrdenar($tabla = "", $campo = "") {
       if(campo!=""){
            $query = "SELECT * from " . $tabla . "order by " . $campo . "DESC limit 1";
      
        $res = mysql_query($query);
        return $res;
       }
    }
    
    function modificarClientes($cedula = "", $fila = array(), $tabla = "") {
        mysql_query("update " . $tabla . " SET nombres ='" . $fila[1] . "' WHERE documento_cliente = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET apellidos ='" . $fila[2] . "' WHERE documento_cliente = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET tipo_usuario ='" . $fila[3] . "' WHERE documento_cliente = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET usuario ='" . $fila[4] . "' WHERE documento_cliente = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET clave ='" . $fila[5] . "' WHERE documento_cliente = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET fecha_nacimiento ='" . $fila[6] . "' WHERE documento_cliente = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET genero ='" . $fila[7] . "' WHERE documento_cliente = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET telefono ='" . $fila[8] . "' WHERE documento_cliente = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET celular ='" . $fila[9] . "' WHERE documento_cliente = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET barrio ='" . $fila[10] . "' WHERE documento_cliente = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET direccion ='" . $fila[11] . "' WHERE documento_cliente = '" . $cedula . "';")or die("La consulta falló " . mysql_error());        
        mysql_query("update " . $tabla . " SET correo ='" . $fila[12] . "' WHERE documento_cliente = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET ciudad ='" . $fila[13] . "' WHERE documento_cliente = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
    }
    
    function eliminarCliente($cedula = "") {
        mysql_query("DELETE FROM usuarios WHERE documento_cliente=" . $cedula  . ";")or die("La eliminación falló " . mysql_error());
        mysql_query("DELETE FROM facturas WHERE documento_cliente=" . $cedula  . ";")or die("La eliminación falló " . mysql_error());
    }
    
    function modificarProductos($codigo_producto = "", $fila = array(), $tabla = "") {
        mysql_query("update " . $tabla . " SET nombre ='" . $fila[1] . "' WHERE codigo_producto = '" . $codigo_producto . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET descripcion ='" . $fila[2] . "' WHERE codigo_producto = '" . $codigo_producto . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET cantidad ='" . $fila[3] . "' WHERE codigo_producto = '" . $codigo_producto . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET valor ='" . $fila[4] . "' WHERE codigo_producto = '" . $codigo_producto . "';")or die("La consulta falló " . mysql_error());
    }
    
    function eliminarProducto($codigo_producto = "") {
        mysql_query("DELETE FROM productos WHERE codigo_producto=" . $codigo_producto . ";")or die("La eliminación falló " . mysql_error());
    }
    
}

?>
