<?php
//Inlcuyo la barra del menú y el archivo model_Productos para pintar los productos en la tabla.
require_once "vistas/partesuperior.php";
include "../model/model_Productos.php";
//Compruebo si el usuario existe para pintar la información de su servicio contratado.
if (isset($_SESSION['nombre'])){
    $prod = new Productos();
    $prod->obtenerServiciosUsuarioActual();

    $produc = $_SESSION['nombrePro'];
    $servicio = $_SESSION['nombreSer'];
}
//Si el usuario no está registrado no tiene acceso a esta página.
if($_SESSION['nombre'] == "false"){
		
	echo "<h3 class='h1_acceso'>Acceso denegado</h3>";
	exit;

}

?>
<!--TABLA DE SERVICIO Y PRODUCTO CONTRATADO-->
<body class="body_myspace">
    
    <div class="container">
        <div class="row">
            <form method="post" id="perfil">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad" >
        
                <div class="panel panel-success"><br>
                    <h2 class="panel-title">SERVICIOS CONTRATADOS</h2>

                    <div class="panel-body">
                    
                        <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-condensed">
                            <tbody>
                                <tr>
                                    <td>Servicio Contratado</td>
                                    <td><input type="text" class="form-control input-sm" name="servicio" value="<?php echo $servicio;?>" required></td>
                                </tr>

                                <tr>
                                    <td>Producto contratado</td>
                                    <td><input type="text" class="form-control input-sm" name="producto" value="<?php echo $produc;?>" required></td>
                                </tr>
                            
                            </tbody>
                        </table>
                        
                        
                    </div>
                        
                       
                        
                </div>
            
            </form>
        </div>
    </div>

    
</body>

<?php 
//Muestro el pie de página.
require_once "vistas/parteinferior.php"
?>