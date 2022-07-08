<?php
	require_once "../model/model_User.php";
	require_once "vistas/partesuperior.php";

	//Compruebo si no es admin o usuario registrado, no tiene acceso a esta página y se le redigirá a la suya de nuevo.
	if(!isset($_SESSION['admin']) || $_SESSION['admin'] == "false"){
		echo "<h3 class='h1_acceso'>Acceso denegado</h3>";
		echo "<h4 class='h1_acceso'>Serás redirigido en unos instantes...</h4>";
		echo '<script>setTimeout(function(){location.href="index.php"}, 3000)</script>';
		exit; 
	}

	//llamo al método para actualizar la tabla de citas.
	if(isset($_POST['actualizar'])){
		$res = new Usuarios();
	 	$res->insertarCitas($_POST['id'], $_POST['fecha_cita'], $_POST['hora_cita'], $_POST['enlace']);
	 }
	 ?>


		<div class="container">
			<table class="table table-bordered"><br>
				<thead class="bg-info text-white">
					<tr>
					<th>Id</th>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>Fecha Cita</th>
							<th>Hora</th>
                            <th>Enlace</th>
							
							

					</tr>
				</thead>
				
				<tbody id="tabla_reservas">
					<?php
					//Pinto los usuarios en la tabla usuarios.
					$sentencia = new Usuarios();
					$mostrar = $sentencia->mostrarUsuarios();
					foreach($mostrar as $res) {
						$id = $res['idUsuarios'];
						echo "<tr>";
						echo "<td>".$res['idUsuarios']."</td>";
						echo "<td>".$res['nombre']."</td>";
						echo "<td>".$res['apellidos']."</td>";
						echo "<td>".$res['fecha_cita']."</td>";
						echo "<td>".$res['hora_cita']."</td>";
                        echo "<td>".$res['enlace']."</td>";
						echo "</tr>";
						
					}
					
					?>
				</tbody>
			</table>

			<?php
			//Hago la paginación de la tabla usuarios, llamando al método.
			$res = new Usuarios();
			$registros =  $res->numRegistrosUsuarios();

			if(isset($_GET['pagina']))
                $pagina = $_GET['pagina'];
				
			?>

			<nav aria-label="Page navigation example">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="citas.php<?php 
						
						
                //Para que nos muestre los usuarios de la tabla de 5 en 5.
                if (isset($pagina))
                    if($pagina - 5 > 0)
                        echo '?pagina=' . ($pagina-5); ?> "aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					
					<li class="page-item">
						<a class="page-link" href="citas.php<?php
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
		
		
		<?php require_once "vistas/parteinferior.php"?>