<?php 

include 'conexionBB.php';


/*
  Hacemos la consulta a la base de datos para que nos muestre en el 
  formulario registro el servicio que queremos contratar.
*/
class Productos {

    //Función para obtener los productos en el select de registro
     public function obtenerProductos(){
        $conexion = new Conexion;
        $conex = $conexion->connect();
    
        $sql = "SELECT idProductos, Nombre FROM productos";
    
        $result =  mysqli_query($conex, $sql);
        $datos = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $datos;    
    }

    //Función para mostrar los productos en la tabla productos
    public function mostrarProductos() {


        $conexion = new Conexion;
        $conex = $conexion->connect();
        $resultados_por_pagina = 5;

        if(isset($_GET['pagina'])){
            $pagina = $_GET['pagina'];
        }else{
            $pagina= 0;
        }


        $consulta= "SELECT p.idProductos, p.Nombre, p.Precio, s.Nombre as nombre_servicio 
                    FROM productos p INNER JOIN servicios s ON p.FK_idServicios = s.idServicios
                    LIMIT $pagina, $resultados_por_pagina";
        $resultado= mysqli_query($conex, $consulta);
    
        //devuelve el total de registros
        $datos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        return $datos;
    
    }


    //Función para editar los productos en la tabla productos
    public function editarProductos ($id, $nombre, $precio) {

        $conexion = new Conexion;
        $conex = $conexion->connect();
        
        //Hacemos la consulta
        $sql = "UPDATE productos SET Nombre= '$nombre', Precio= '$precio' WHERE idProductos = '$id'";
        return mysqli_query($conex, $sql);   

    }

    //Función para mostrar los datos de los productos en la tabla editar productos.
    public function obtenerdatosProductos($id) {
        $conexion = new Conexion;
        $conex = $conexion->connect();
               
        $sql = "SELECT p.idProductos, p.Nombre, p.Precio, s.Nombre as nombre_servicio 
        FROM productos p INNER JOIN servicios s ON p.FK_idServicios = s.idServicios WHERE idProductos = '$id'";

        $resultado = mysqli_query($conex, $sql);
        $datos = mysqli_fetch_array($resultado);
        return $datos;
    }



    //Función para mostrar el precio y el nombre de la base de datos en los packs y consultas.
    public function mostrarPack($idProductos) {

        $conexion = new Conexion;
        $conex = $conexion->connect();
        $sql = "SELECT Nombre, Precio FROM productos WHERE idProductos = '$idProductos'";
        $resultado = mysqli_query($conex, $sql); 
        return mysqli_fetch_array($resultado);
    }

    //Función para mostar los tipos de servicios en el select de la tabla editar
    public function obtenerServicios() {
        $conexion = new Conexion;
        $conex = $conexion->connect();
            
        $sql = "SELECT idServicios, Nombre FROM servicios";
    
        $result =  mysqli_query($conex, $sql);
        $datos = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $datos;
    
    }

    //Función para obtener los servicios del usuario que esta logueado.
    public function obtenerServiciosUsuarioActual() {
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $id = $_SESSION['id'];
        
        $sql = "SELECT r.FK_idUsuarios, s.Nombre AS 'nombreServicio', p.Nombre AS 'nombreProducto' FROM reservas r 
        INNER JOIN productos p ON r.FK_idProductos = p.idProductos INNER JOIN servicios s ON s.idServicios = p.FK_idServicios  
        WHERE FK_idUsuarios = '$id'";
    
        $result =  mysqli_query($conex, $sql);
        $datos = mysqli_fetch_array($result);

        //Si existe nos muestra los campos si no se muestran vacíos.
        if(isset($datos)){
            $_SESSION['nombreSer'] = $datos['nombreServicio'];
            $_SESSION['nombrePro'] = $datos['nombreProducto'];
        }
        else{
            $_SESSION['nombreSer'] = "";
            $_SESSION['nombrePro'] = "";
        }
    
    }


    //Funcion para mostrar el número de registro de la tabla productos
    public function numRegistrosProductos(){
        $conexion = new Conexion;
        $conex = $conexion->connect();
    
        $consulta= "SELECT * FROM productos";
        $resultado= mysqli_query($conex, $consulta);
        
        //devuelve el total de registros
        return mysqli_num_rows($resultado);
    }

    

}

?>