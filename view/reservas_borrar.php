<?php 
//Llamo al archivo de model_Reservas para poder llamar al método borrar.
require '../model/model_Reservas.php';
//Comprobamos si existe el id del usuario y llamamos al método borrar.
if(isset($_GET['id'])) {
    $reservas = new Reservas();
    $id = intval($_GET['id']);
    $res = $reservas->eliminarReservas($id);
    //Inciamos la sesión y comprobamos si existe o no para borrarla.
    session_start();
    if($res) {
        
        $_SESSION['mensaje'] = 'Eliminado correctamente';
    }else {
        $_SESSION['mensaje'] = 'No existe la reserva';
    }
    header('Location: reservas_tabla.php');

}

?>