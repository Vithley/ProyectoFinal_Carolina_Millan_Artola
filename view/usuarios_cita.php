<?php
    //Mostramos el dashboard y el archivo de model_Reservas para pintar el formulario de editar reservas.
    require_once "../model/model_User.php";
    require_once "vistas/partesuperior.php";
    //Llámamos al método para mostrar los datos del usuario que hemos seleccionado para darle la cita.
    $id = $_GET['id'];
    $res = new Usuarios();
    $usuario = $res->getUsuarios($id); 
 
    

    //Si el usuario no es admin no tiene acceso a esta página y se le redigirá a la suya de nuevo.
    if($_SESSION['admin'] == "false"){
		echo "<h3 class='h1_acceso'>Acceso denegado</h3>";
		echo "<h4 class='h1_acceso'>Serás redirigido en unos instantes...</h4>";
		echo '<script>setTimeout(function(){location.href="index.php"}, 3000)</script>';
		exit;
	}
?>
	
<div class="container mt-5">
    <div class="row"> 
        
        <div class="col-md-3">
            <h1>Ingrese Cita</h1>
            <form action="citas.php" method="POST" id="form_cita" >
            <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="text" class="form-control mb-3" name="nombre" value="<?php echo $usuario[1];?>">
                <input type="text" class="form-control mb-3" name="apellidos" value="<?php echo $usuario[2];?>">
                <input type="date" class="form-control mb-3" name="fecha_cita" value="Fecha">
                <input type="time" class="form-control mb-3" name="hora_cita" value="Hora">
                <input type="text" class="form-control mb-3" name="enlace" value="Enlace">


                <input type="submit" class="btn bg-info text-white" name="actualizar">
            </form>
        </div>
    </div>
     
		
		<?php 
        //Pintamos la parte inferior del dashboard.
        require_once "vistas/parteinferior.php";        
        ?>