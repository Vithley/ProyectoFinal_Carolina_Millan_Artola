<?php
//Llamamos el archivo de model_Reservas para pintar las reservas en la tabla.
require_once "../model/model_Reservas.php";
?>

<?php 
//Muestro el dashboard de la página.
require_once "vistas/partesuperior.php"
?>

	<?php
	//Si existe la sesión de mensaje borramos los artículos de tabla reservas
	if(isset($_SESSION['mensaje'])) {
	?>
		<div class="alert alert-warning">
			<?php echo $_SESSION['mensaje']?>
		</div>
	<?php
	unset($_SESSION['mensaje']);
	}
	
	//Si el usuario no es admin no tiene acceso a esta página y se le redigirá a la suya de nuevo.
	if($_SESSION['admin'] == "false"){
		echo "<h3 class='h1_acceso'>Acceso denegado</h3>";
		echo "<h4 class='h1_acceso'>Serás redirigido en unos instantes...</h4>";
		echo '<script>setTimeout(function(){location.href="index.php"}, 3000)</script>';
		exit;
	}

	//llamo al método para mostrar la información de la reserva que seleccionamos.
	if(isset($_POST['actualizar'])){
		$res = new Reservas();
		$res->editarReservas($_POST['id'], $_POST['servicio'], $_POST['fecha']);
	}
	?>
	<!--TABLA DE RESERVAS-->
		<div class="container">
			<table class="table table-bordered"><br>
				<thead class="bg-info text-white">
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Servicio</th>
						<th>Fecha</th>
						<th>Acción</th>

					</tr>
				</thead>
				<tbody id="tabla_reservas">
					<?php
					//Pintamos las reservas en la tabla.
					$sentencia = new Reservas();
					$mostrar = $sentencia->mostrarReservas();
					foreach($mostrar as $res) {
					?>	
						<tr>
							<td><?php echo $res['idReservas'];?></td> 
							<td><?php echo $res['nombreUsuario'];?></td>
							<td><?php echo $res['nombreProducto'];?></td>
							<td><?php echo $res['Fecha'];?></td>
							<td class='text-center'>
							<a href="reservas_editar.php?id=<?php echo $res['idReservas'];?>" class='btn bg-info text-white btn-sm'>Editar</a>
							<a href="reservas_borrar.php?id=<?php echo $res['idReservas'];?>" class='btn btn-danger btn-sm'>Eliminar</button>
							</td>
						</tr>

					<?php
					} 
					?>	
			
				</tbody>
			</table>
			<?php
			//Hago la paginación de la página.
			$res = new Reservas();
			$registros =  $res->numRegistrosReservas();

			if(isset($_GET['pagina']))
                $pagina = $_GET['pagina'];

			?>

			
			<nav aria-label="Page navigation example">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="reservas_tabla.php<?php 
						
						
                //Para que nos muestre las reservas de la tabla de 5 en 5.
                if (isset($pagina))
                    if($pagina - 5 > 0)
                        echo '?pagina=' . ($pagina-5); ?> "aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					
					<li class="page-item">
						<a class="page-link" href="reservas_tabla.php<?php
                if (!isset($pagina)){
                    if($registros > 5) echo "?pagina=5";
				}
                else if($pagina + 5 < $registros)
                    echo "?pagina=$pagina + 5";
                else echo "?pagina=$pagina" ?> "aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		
		<?php
		//Muestro la parte inferior del dashboard
		require_once "vistas/parteinferior.php"
		?>