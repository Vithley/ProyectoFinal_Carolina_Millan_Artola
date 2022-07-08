
<?php
    //Mostramos el dashboard y el archivo de model_Reservas para pintar el formulario de editar reservas.
    require_once "../model/model_Reservas.php";
    require_once "vistas/partesuperior.php";
    //Llámamos al método para mostrar los cambios en la tabla reservas una vez editada.
    $id = $_GET['id'];
    $res = new Reservas();
    $reserva = $res->getReserva($id); 

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
            <h1>Ingrese datos</h1>
            <form action="reservas_tabla.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $reserva[0];?>">
                <input type="date" class="form-control mb-3" name="fecha" value="<?php echo $reserva[3];?>">
                <select name="servicio" id="servicio" class="form-control mb-3">
                    <option value="">Seleccionar Servicio</option>
                    <?php
                    //Llamamos al método para mostrar los productos en el select.
                    $product = new Reservas();
                    $productos = $product->obtenerProductos();
                    foreach($productos as $producto) {
                        echo '<option value="'.$producto['idProductos'].'">'.$producto['Nombre'].'</option>';
                    }
                
                    ?>
            
                </select>
                
                <input type="submit" class="btn bg-info text-white" name="actualizar">
            </form>
        </div>
		
		<?php 
        //Pintamos la parte inferior del dashboard.
        require_once "vistas/parteinferior.php";        
        ?>