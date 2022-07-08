<?php
//Incluyo el archivo de model_Contacto y la parte superior del dashboard.
require_once "../model/model_Contacto.php";

require_once "vistas/partesuperior.php";

//Compruebo si no es admin o usuario registrado, no tiene acceso a esta página y se le redigirá a la suya de nuevo.
if(!isset($_SESSION['admin']) || $_SESSION['admin'] == "false"){
	echo "<h3 class='h1_acceso'>Acceso denegado</h3>";
	echo "<h4 class='h1_acceso'>Serás redirigido en unos instantes...</h4>";
	echo '<script>setTimeout(function(){location.href="index.php"}, 3000)</script>';
	exit; 
}
?>

		<!--PÁGINA DE TABLA DE CONTACTO-->
		<div class="container">
			<table class="table table-bordered"><br>
				<thead class="bg-info text-white">
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Email</th>
                        <th>Fecha</th>
						<th>Mensaje</th>
                        <th>Acción</th>


					</tr>
				</thead>
				<tbody id="tabla_contacto">
					<?php
					//Llamo al método de mostrar contactos para pintar la tabla con los datos de la base datos y poder eliminarlos.
					$sentencia = new Contacto();
					$mostrar = $sentencia->mostrarContactos();
					foreach($mostrar as $res) {
						$id = $res['idContacto'];
						echo "<tr>";
						echo "<td>".$res['idContacto']."</td>";
						echo "<td>".$res['Nombre']."</td>";
						echo "<td>".$res['Apellidos']."</td>";
						echo "<td>".$res['Email']."</td>";
                        echo "<td>".$res['Fecha']."</td>";
                        echo "<td>".$res['Mensaje']."</td>";?>
						<td>
						<a href="contacto_borrar.php?id=<?php echo $res['idContacto'];?>" class='btn btn-danger btn-sm'>Eliminar</button>
						</td>
					<?php
					} 
					?>
					
					
					
				</tbody>
			</table>
			<?php
			//Hago la paginación de la tabla de contactos.
			$res = new Contacto();
			$registros =  $res->numRegistrosContacto();
			
			if(isset($_GET['pagina']))
                $pagina = $_GET['pagina'];
			?>

			<nav aria-label="Page navigation example">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="contacto_tabla.php<?php 
						
						
                //Para que nos muestre los contactos de la tabla de 5 en 5.
                if (isset($pagina))
                    if($pagina - 5 > 0)
                        echo '?pagina=' . ($pagina-5); ?> "aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					
					<li class="page-item">
						<a class="page-link" href="contacto_tabla.php<?php
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
		//Muestro la parte inferior del dashboard.
		require_once "vistas/parteinferior.php"
		?>