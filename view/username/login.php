<?php
    require_once __DIR__ . '/../../controller/usernameController.php';

    $obj = new usernameController();

    // Traer los nuevos parametros del formulario
    $nombre = $_POST['nombre'];
    $correo_electronico = $_POST['correo_electronico'];

    $obj->login($nombre, $correo_electronico);
?>

  