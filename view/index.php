<?php
//Incluyo la parte superior del dashboard.
require_once "vistas/partesuperior.php";
include '../model/model_User.php';
//Creo un if para ver si existe la sesión del usuario y si es así nos muestre la información para poder editarla.
if (isset($_SESSION['nombre'])){
  $id = $_SESSION['id'];
  $nombre = $_SESSION['nombre'];
  $apellidos = $_SESSION['apellidos'];
  $correo = $_SESSION['correo'];
  $pass = $_SESSION['password'];
  $telefono = $_SESSION['phone'];
  $nombre_hijo = $_SESSION['sonname'];

}
//Si no es así que nos muestre los campos vacíos.
else{
  $id = '';
  $nombre = "";
  $apellidos = "";
  $correo = "";
  $pass = "";
  $telefono = "";
  $nombre_hijo = "";
}
    
?>


<!--INICIO DEL CONTENIDO PRINCIPAL -->
<?php
//Llamo al método editar para que el usuario pueda editar su información
//require_once '../model/model_User.php';
if(isset($_POST['editar'])){

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['email'];
    $pass = $_POST['password'];
    $telefono = $_POST['telefono'];
    $nombre_hijo = $_POST['hijo'];

		$res = new Usuarios();
    $res->actualizarUsuarios($id, $nombre, $apellidos, $telefono, $correo, $pass, $nombre_hijo);

    $_SESSION['id'] = $id;
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellidos'] = $apellidos;
    $_SESSION['correo'] = $correo;
    $_SESSION['password'] = $pass;
    $_SESSION['phone'] = $telefono;
    $_SESSION['sonname'] = $nombre_hijo;

}


if(isset($_POST['borrar'])){

  $id = $_POST['id'];

  $res = new Usuarios();
  $res->eliminarUsuarios($id);
  session_destroy();
  echo "set<script> window.location='home.php'; </script>";
}

?>

<!--FORMULARIO DE DATOS DEL USUARIO-->
<body class="body_myspace">
    
    
  <div class="container">
    <div class="row">
      <form action="index.php" method="post" id="perfil">
        <div class="" >
    
    
          <div class="panel panel-success"><br>
              <h2 class="panel-title">PERFIL</h2>

              <div class="panel-body">
              
                <!--Muestro los distintos campos del usuario en sus inputs-->
                <input type="hidden" class="form-control input-sm" name="id" value="<?php echo $id;?>" required></td>
    
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control input-sm" name="nombre" value="<?php echo $nombre;?>" required></td>
                        
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control input-sm" name="apellidos" value="<?php echo $apellidos;?>" required></td>
                  
                <label for="telefono">Teléfono</label>
                <input type="number" class="form-control input-sm" name="telefono" value="<?php echo $telefono;?>" ></td>
                      
                <label for="email">Email</label>
                <input type="email" class="form-control input-sm" required name="email" value="<?php echo $correo;?>"></td>
                      
                <label for="password">Contraseña</label>
                <input type="password" class="form-control input-sm" required name="password" value="<?php echo $pass;?>"></td>
                          
                <label for="hijo">Nombre hijo/a</label>
                <input type="text" class="form-control input-sm" name="hijo" value="<?php echo $nombre;?>" required></td>
    
              </div>
              
              <div class="panel-footer text-center">      
                <button type="submit" class="btn btn-sm btn-success" name="editar"><i class="glyphicon glyphicon-refresh"></i> Actualizar</button>
                <button type="submit" class="btn btn-sm btn-danger" name="borrar"><i class="glyphicon glyphicon-refresh"></i> Darse de baja</button>
              </div>
         
          </div>
              
        </div>
          
      </form>

    </div>

  </div>

    
</body>


<!--FIN DEL CONTENIDO PRINCIPAL-->

<?php 
  //Incluyo la parte inferior del dashboard.
  require_once "vistas/parteinferior.php"
?>

               
</html>
 
