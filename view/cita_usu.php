<?php
//Incluyo la parte superior del dashboard.
require_once "vistas/partesuperior.php";
include '../model/model_User.php';
//Creo un if para ver si existe la sesión del usuario y si es así nos muestre la información para poder editarla.
if (isset($_SESSION['nombre'])){
  $id = $_SESSION['id'];
  $fecha = $_SESSION['fecha_cita'];
  $hora = $_SESSION['hora_cita'];
  $enlace = $_SESSION['enlace'];
 

}
//Si no es así que nos muestre los campos vacíos.
else{
  $id = '';
  $fecha = "";
  $hora = "";
  $enlace = "";
 
}
    
?>

<!--FORMULARIO DE DATOS DEL USUARIO-->
<body class="body_myspace">
    
    
  <div class="container">
    <div class="row">
      <form action="index.php" method="post" id="perfil">
        <div class="" >
    
    
          <div class="panel panel-success"><br>
              <h2 class="panel-title">MI CITA</h2>

              <div class="panel-body">
              
                <!--Muestro los distintos campos del usuario en sus inputs-->
                <input type="hidden" class="form-control input-sm" name="id" value="<?php echo $id;?>" required></td>
    
                <label for="fecha">Dia</label>
                <input type="date" class="form-control input-sm" name="fecha_cita" value="<?php echo $fecha;?>" required>
                        
                <label for="hora">Hora</label>
                <input type="time" class="form-control input-sm" name="hora_cita" value="<?php echo $hora;?>" required>

                <label for="enlace">Pinche aquí para realizar su llamada</label><br>
                <?php echo "<a href='$enlace' target='_blank'>Enlace a Zoom</a>"?>

                
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
 