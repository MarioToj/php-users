<?php

    require_once __DIR__ . '/../../controller/usernameController.php';


    $obj = new usernameController();
    $obj->delete($_GET['id']);

?>