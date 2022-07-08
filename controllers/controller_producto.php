<?php
//Método para mostrar los productos en el select.
require '../model/model_Productos.php';
$selecProduct = new Productos();
$productos = $selecProduct->obtenerProductos();



?>