<?php
    require_once __DIR__ . '/../head/head.php';
    require_once __DIR__ . '/../../controller/usernameController.php';

    $obj = new usernameController();
    $user = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="id" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="nombre" value="<?= $user[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Dirección</label>
        <div class="col-sm-10">
            <input type="text" name="direccion" class="form-control" id="direccion" value="<?= $user[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Teléfono</label>
        <div class="col-sm-10">
            <input type="text" name="telefono" class="form-control" id="telefono" value="<?= $user[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Correo</label>
        <div class="col-sm-10">
            <input type="text" name="correo_electronico" class="form-control" id="correo_electronico" value="<?= $user[4]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Estado</label>
        <div class="col-sm-10">
            <input type="text" name="estado" class="form-control" id="estado" value="<?= $user[5]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once __DIR__ . '/../head/footer.php';
?>