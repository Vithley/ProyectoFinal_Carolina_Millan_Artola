<?php
//Muestro la parte superior del dashboard y llamo al archivo model_Productos para mostrar los productos a editar.
require_once "../model/model_Productos.php";
require_once "vistas/partesuperior.php";
//Si existe ese id obtengo los datos del producto a editar.
$id = $_GET['id'];
$prod = new Productos();
$producto = $prod->obtenerdatosProductos($id);

?>



<!--TABLA PARA EDITAR LOS PRODUCTOS-->
<div class="container mt-5">
    <div class="row"> 
        
        <div class="col-md-3">
            <h1>Ingrese datos</h1>
                <form action="productos.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="text" class="form-control mb-3" name="nombre" value="<?php echo $producto['Nombre'];?>">
                    <input type="text" class="form-control mb-3" name="precio" value="<?php echo $producto['Precio'];?>">               
                    <input type="submit" class="btn bg-info text-white" name="actualizarProducto">
                </form>
        </div>
    </div>
</div>
		
<?php 
//Muestro la parte inferior del dashboard.
require_once "vistas/parteinferior.php"
?>