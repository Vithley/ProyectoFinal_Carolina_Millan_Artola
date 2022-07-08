

<?php
//Llamo al archivo de model_Productos y al archivo de dashboard.
require_once "../model/model_Productos.php";
require_once "vistas/partesuperior.php";

//Si el usuario no es admin no tiene acceso a esta página y se le redigirá a la suya de nuevo.
if($_SESSION['admin'] == "false"){
	echo "<h3 class='h1_acceso'>Acceso denegado</h3>";
	echo "<h4 class='h1_acceso'>Serás redirigido en unos instantes...</h4>";
	echo '<script>setTimeout(function(){location.href="index.php"}, 3000)</script>';
	exit;
}

//Creo un if para cuando pinchemos en el botón actualizar productos nos muestre la información de ese producto.
if(isset($_POST['actualizarProducto'])){
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
	//LLamo al método editar productos para editarlos
	$prod = new Productos();
	$prod->editarProductos($id, $nombre, $precio);
}
?>
		<!--TABLA PRODUCTOS-->
		<div class="container">
			<table class="table table-bordered "><br>
				<thead class="bg-info text-white">
					<tr>
					<th>Id</th>
						<th>Nombre</th>
						<th>Precio</th>
						<th>Servicio</th>
						<th>Acción</th>

					</tr>
				</thead>
				<tbody id="tabla_reservas">
					<?php
					//Llamo al método para mostrar los productos en la tabla productos.
					$sentencia = new Productos();
					$mostrar = $sentencia->mostrarProductos();
					foreach($mostrar as $res) {
						?>
						<tr>
						<td scope="row"><?php echo $res['idProductos'];?></td>
						<td><?php echo $res['Nombre'];?></td>
						<td><?php echo $res['Precio'];?></td>
						<td><?php echo $res['nombre_servicio'];?></td>
						<td><a href='productos_editar.php?id=<?php echo $res['idProductos'];?>'class='btn bg-info text-white btn-sm'>Editar</a></td>
						</tr>
					<?php
					}
					?>
				</tbody>
				
			</table>

			<?php
			//Hago la paginación de la tabla productos llamando al método.
			$res = new Productos();
			$registros =  $res->numRegistrosProductos();

			if(isset($_GET['pagina'])){
				$pagina = $_GET['pagina'];
			}

			?>

			<nav aria-label="Page navigation example">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="productos.php<?php 
						
						
                //Para que nos muestre los productos de la tabla de 5 en 5.
                if (isset($pagina))
                    if($pagina - 5 > 0)
                        echo '?pagina=' . ($pagina-5); ?> "aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					
					<li class="page-item">
						<a class="page-link" href="productos.php<?php
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
		//Muestro la parte inferior.
		 require_once "vistas/parteinferior.php"
		 ?>