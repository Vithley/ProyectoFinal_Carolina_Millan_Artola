<?php

require '../model/model_Contacto.php';

$datos = json_decode(file_get_contents('php://input'),true);//decodifico el string JSON.

//Llamamos el método contactos para hacer el registro.
$user = new Contacto();
$result = $user->registroContacto($datos);

echo json_encode($result);//codificamos el resultado en formato JSON.

?>