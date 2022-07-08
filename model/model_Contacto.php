<?php
 //LLamo al archivo conexión para acceder al método de la clase y hacer la conexión en las consultas
include 'conexionBB.php';




class Contacto {

    //Función para introducir los datos del contacto en la base de datos
    public function registroContacto($user) {
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $nombre = $user['nombre'];
        $apellidos = $user['apellidos'];
        $email = $user['email'];
        $fecha = $user['fecha'];
        $mensaje = $user['mensaje'];

        //Hacemos la consulta a la base de datos para insertar los datos del contacto.
        $sql = "INSERT INTO contacto (Nombre, Apellidos, Email, Fecha, Mensaje)
        VALUES ('$nombre', '$apellidos', '$email', '$fecha', '$mensaje')";

        $resultado =  mysqli_query($conex, $sql);
        
        return $resultado;
        

    }

    //Función para mostrar los contactos en la tabla
    public function mostrarContactos() {
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $resultados_por_pagina = 5;

        if(isset($_GET['pagina'])){
            $pagina = $_GET['pagina'];
        }else{
            $pagina= 0;
        }

        $consulta= "SELECT * FROM contacto LIMIT $pagina, $resultados_por_pagina";
        $resultado= mysqli_query($conex, $consulta);
    
        //devuelve el total de registros
        $datos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        return $datos;
    }

    //Funcion para mostrar el número de registro de la tabla Contactos
    public function numRegistrosContacto(){
        
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
    
        $consulta= "SELECT * FROM contacto";
        $resultado= mysqli_query($conex, $consulta);
        
        //Devuelve el total de registros
        return mysqli_num_rows($resultado);
    }

    //Función para eliminar las consultas de la tabla contacto
    public function eliminarContacto($id) {
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $sql = "DELETE FROM contacto WHERE idContacto = '$id'";
        $res = mysqli_query($conex, $sql);
        if($res) {
            return  true;

        }else {
            return false;
        }        
    }

}

?>