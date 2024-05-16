<?php
    
    require_once __DIR__ . '/../../controller/usernameController.php';

    $obj = new usernameController();

    // Traer los nuevos parametros del formulario
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo_electronico = $_POST['correo_electronico'];
    $estado = $_POST['estado'];

    $obj->guardar($nombre, $direccion, $telefono, $correo_electronico, $estado);
?>