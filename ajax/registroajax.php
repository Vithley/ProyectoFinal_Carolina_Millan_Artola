<?php

require '../model/model_User.php';

$datos = json_decode(file_get_contents('php://input'),true);//decodifico el string JSON.

//Llamamos el método usuarios para hacer el registro
$user = new Usuarios();
$result = $user->registro($datos);

echo json_encode($result);//codificamos el resultado en formato JSON.

?>