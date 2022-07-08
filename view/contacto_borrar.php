<?php 
//Llamo al archivo para poder borrar los contactos de la tabla
require '../model/model_Contacto.php';
//Si existe el id, llamo al método para borrar los contactos.
if(isset($_GET['id'])) {
    $reservas = new Contacto();
    $id = intval($_GET['id']);
    $res = $reservas->eliminarContacto($id);
    //Inicio la sesión y si el contacto existe en la tabla lo borramos si no no.
    session_start();
    if($res) {
        
        $_SESSION['mensaje'] = 'Eliminado correctamente';
    }else {
        $_SESSION['mensaje'] = 'No existe el contacto';
    }
    header('Location: contacto_tabla.php');//Si se borra se dirije a la misma página.
    
}

?>