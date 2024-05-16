<?php
    require_once __DIR__ . '/../head/head.php';
?>

    <!-- Agregregamos los nuevos inputs al formualario para recibir datos nuevos -->
    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
        <input type="text" name="nombre" required class="form-control" id="nombre" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Direccion</label>
        <input type="text" name="direccion" required class="form-control" id="direccion" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Telefono</label>
        <input type="text" name="telefono" required class="form-control" id="telefono" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <input type="text" name="correo_electronico" required class="form-control" id="correo_electronico" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Estado</label>
        <input type="text" name="estado" required class="form-control" id="estado" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once __DIR__ . '/../head/footer.php';
?>