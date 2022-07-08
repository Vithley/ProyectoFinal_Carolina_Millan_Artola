<?php
//Incluyo la conexión a la base de datos de la clase Conexion.
include 'conexionBB.php';

class Reservas {

    //Función para mostrar las reservas en la tabla
    public function mostrarReservas() {
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        //Variable para crear la paginación.
        $resultados_por_pagina = 5;

        if(isset($_GET['pagina'])){
            $pagina = $_GET['pagina'];
        }else{
            $pagina= 0;
        }

        $consulta= "SELECT r.idReservas, u.Nombre AS nombreUsuario, p.Nombre AS nombreProducto, r.fecha AS Fecha FROM 
        reservas r INNER JOIN usuarios u ON u.idUsuarios = r.FK_idUsuarios INNER JOIN productos p ON r.FK_idProductos = p.idProductos 
        LIMIT $pagina, $resultados_por_pagina";
        $resultado= mysqli_query($conex, $consulta);
    
        //Devuelve el total de registros
        $datos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        return $datos;
    }

    

    //Función para obtener los campos de los productos y mostralos en el select
    public function obtenerProductos(){
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
    
        $sql = "SELECT idProductos, Nombre FROM productos";
    
        $result =  mysqli_query($conex, $sql);
        $datos = [];
 
        if($result->num_rows) {
            while($row = $result->fetch_assoc()){
                $datos[] = [
                    'idProductos' => $row['idProductos'],
                    'Nombre' => $row['Nombre'],
                ];
            }
        }
        return $datos;
    
    }

    
    //Función para obtener los datos de la tabla reservas para editarlos
    public function obtenerdatosReservas($id) {
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $id = $_POST['idReservas'];

        $sql = "SELECT r.idReservas, u.Nombre AS nombreUsuario, p.Nombre AS nombreProducto, r.fecha AS Fecha FROM 
        reservas r INNER JOIN usuarios u ON u.idUsuarios = r.FK_idUsuarios INNER JOIN productos p ON r.FK_idProductos = p.idProductos
         WHERE idReservas = '$id'";
        $resultado = mysqli_query($conex, $sql);
        $ver = mysqli_fetch_row($resultado);
        return $ver;        
    }

    //Función para obtener la  reserva que se edita por su id
    public function getReserva($id){
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $sql = "SELECT * FROM reservas WHERE idReservas = $id";
        $resultado = mysqli_query($conex, $sql);
        $ver = mysqli_fetch_row($resultado);
        return $ver;       

    }

    //Función para editar los datos de la tabla reservas
    public function editarReservas($id, $servicio, $fecha){
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $sql = "UPDATE reservas SET Fecha = '$fecha', FK_idProductos = '$servicio' WHERE idReservas = '$id'";
        $resultado = mysqli_query($conex, $sql);
        return $resultado;        

    }

    //Función para eliminar las reservas de la tabla
    public function eliminarReservas($id) {
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $sql = "DELETE FROM reservas WHERE idReservas = '$id'";
        $res = mysqli_query($conex, $sql);
        if($res) {
            return  true;

        }else {
            return false;
        }        
    }

    
    //Funcion para mostrar el número de registro de la tabla reservas
     public function numRegistrosReservas(){
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
    
        $consulta= "SELECT * FROM reservas";
        $resultado= mysqli_query($conex, $consulta);
        
        //devuelve el total de registros
        return mysqli_num_rows($resultado);
    }

}
















?>