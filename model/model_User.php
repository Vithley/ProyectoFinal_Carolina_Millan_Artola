<?php 
//Incluyo la conexión a la base de datos de la clase Conexion.
include 'conexionBB.php';

//Creo la clase usuarios.
class Usuarios {

    //Creo el método para hacer el resgistro/ reserva 
    public function registro($user) {
        //Inicio la sesión.
        session_start();
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
       $conexion = new Conexion;
       $conex = $conexion->connect();
       $nombre = $user['nombre'];
       $apellidos = $user['apellidos'];
       $phone = $user['phone'];
       $email = $user['email'];
       $pass = $user['password'];
       $password = password_hash($pass, PASSWORD_DEFAULT);
       $fecha = $user['date'];
       $sonname = $user['sonname'];
       $idProduct = $user['servicio'];
      

        //Hago la consulta a la base de datos para insertar los datos del usuario.
       $sql = "INSERT INTO usuarios (nombre, apellidos, telefono, email, password, fecha, nombre_hijo)
       VALUES ('$nombre', '$apellidos', '$phone', '$email', '$password', '$fecha', '$sonname')";

       $result =  mysqli_query($conex, $sql);

        $_SESSION['apellidos'] = $apellidos;
        $_SESSION['correo'] = $email; 
        $_SESSION['phone'] = $phone;
        $_SESSION['sonname'] = $sonname;
        $_SESSION['password'] = $pass;

              
       //Consulta para seleccionar el usuario que hace la reserva
       $sql_id = "SELECT * FROM usuarios WHERE email = '$email'";
       $result_id = mysqli_query($conex, $sql_id);

       $resultado = $result_id->fetch_assoc();
       $id = $resultado['idUsuarios'];
       $_SESSION['id'] = $id;

        //Consulta para guardar los datos en la tabla reservas.
       $sql = "INSERT INTO reservas(FK_idUsuarios, FK_idProductos, Fecha)
       VALUES ('$id', '$idProduct', '$fecha')";


       $result =  mysqli_query($conex, $sql);

       return $resultado;

    }

    //Creo el método para hacer el login en la página
    public function login() {
         //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $correo = $_POST['correo'];
        $password = $_POST['pass'];
        //Creo la consulta para seleccionar los usuarios y el correo para el login.
        $sql = "SELECT password FROM usuarios WHERE email = '$correo'";
        $result = mysqli_query($conex, $sql);
        $row = $result->fetch_assoc();
        
        if(isset($row)){
            $passwordBD = $row['password'];
        
            if (password_verify($password, $passwordBD)){
            
                //Consulta para selecionar el email y la contraseña del usuario en el login.
                $sql = "SELECT * FROM usuarios WHERE email = '$correo'";
    
                $result = mysqli_query($conex, $sql);
                $row = $result->fetch_assoc();
                
                //Creo las sesiones para mostrar los campos del usuario.                
                $_SESSION['id'] = $row['idUsuarios'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['apellidos'] = $row['apellidos'];
                $_SESSION['phone'] = $row['telefono'];
                $_SESSION['correo'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['sonname'] = $row['nombre_hijo'];
                $_SESSION['fecha_cita'] = $row['fecha_cita'];
                $_SESSION['hora_cita'] = $row['hora_cita'];
                $_SESSION['enlace'] = $row['enlace'];
                

                //Compruebo si es Admin o no
                if($row['privilegios'] == 1){
                    $_SESSION['admin'] = "true";
                }
                else{
                    $_SESSION['admin'] = "false";
                }
                
                header("Location: ../view/index.php");
                    
            }
            else {
                echo "<p class='alert'>Usuario o contraseña incorrectos</p>";            
            }

        }
        else {         
            echo "<p class='alert'>Usuario o contraseña incorrectos</p>";
        }
         

    }

    
    //Consulta para mostrar los datos del usuario que está logueado
    public function verUsuario($user) {
         //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $correo = $user['email'];
        //Consulta para seleccionar todos los campos del usuario por el correo.
        $sql = "SELECT * FROM usuarios WHERE email = '$correo'";

        $result = mysqli_query($conex, $sql);

        $datos = $result->fetch_assoc();
        return $datos;
    }

    //Consulta para mostrar los usuarios en la tabla usuarios
    public function mostrarUsuarios() {
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();

        $resultados_por_pagina = 5;

        if(isset($_GET['pagina'])){
            $pagina = $_GET['pagina'];
        }else{
            $pagina= 0;
        }

        $consulta= "SELECT * FROM usuarios LIMIT $pagina, $resultados_por_pagina";
        $resultado= mysqli_query($conex, $consulta);
    
        $datos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        return $datos;

        var_dump($datos);

    }

    //Funcion para mostrar el número de registro por páginas de la tabla usuarios
    public function numRegistrosUsuarios(){
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
    
        $consulta= "SELECT * FROM usuarios";
        $resultado= mysqli_query($conex, $consulta);
        
        //devuelve el total de registros
        return mysqli_num_rows($resultado);
    }
   
    //Función para editar los datos de la tabla usuarios
    public function actualizarUsuarios($id, $nombre, $apellidos, $telefono, $email, $contraseña, $nombre_hijo ) {
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $id = $_SESSION['id'];

        $password = password_hash($contraseña, PASSWORD_DEFAULT);

        $sql = "UPDATE usuarios SET nombre = '$nombre', apellidos = '$apellidos', telefono = '$telefono', email = '$email',
        password = '$password', nombre_hijo =' $nombre_hijo'  WHERE idUsuarios = '$id'";

        $resultado = mysqli_query($conex, $sql);
        return $resultado;        
    }

    //Función para eliminar las reservas de la tabla
    public function eliminarUsuarios($id) {
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $sql = "DELETE FROM usuarios WHERE idUsuarios = '$id'";
        $res = mysqli_query($conex, $sql);
        if($res) {
            return  true;

        }else {
            return false;
        }        
    }

    //Función para mostrar la información del usuario que seleccionamos para dar cita.
    public function getUsuarios($id){
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $sql = "SELECT * FROM usuarios WHERE idUsuarios = '$id'";
        $resultado = mysqli_query($conex, $sql);
        $ver = mysqli_fetch_row($resultado);
        return $ver;          
         
         

    }

    //Función para editar los datos de la tabla usuarios(citas)
    public function insertarCitas($id, $fecha, $hora, $enlace){
        $fecha = $_POST['fecha_cita'];
        $hora = $_POST['hora_cita'];
        //Llamo a la clase conexion y al método connect para crear la conexión en la consulta.
        $conexion = new Conexion;
        $conex = $conexion->connect();
        $sql = "UPDATE usuarios SET fecha_cita = '$fecha', hora_cita = '$hora', enlace = '$enlace'  WHERE idUsuarios = '$id'";
        $resultado = mysqli_query($conex, $sql);
        return $resultado;        

    }

}

?>
