<?php

$connection = mysqli_connect("btjo445btnvw5ygqf5m2-mysql.services.clever-cloud.com", "u98vz4fkujkxjskm", "arMBMpQOENb8Otqya5df", "btjo445btnvw5ygqf5m2");


if( isset($_POST['click_edit_btn']) ) {
  $id = $_POST['user_id'];
  $arrayResult = [];

  $sql = "SELECT * FROM username WHERE id='$id'";
  $result = $connection->query($sql);

  if ($result->num_rows > 0) {
    
    // Obtener los datos del usuario
    $row = $result->fetch_assoc();

    // Almacenar los datos del usuario en un arreglo asociativo
    $userData = array(
      "id" => $row["id"],
      "nombre" => $row["nombre"],
      "direccion" => $row["direccion"],
      "telefono" => $row["telefono"],
      "correo_electronico" => $row["correo_electronico"],
      "estado" => $row["estado"]
    );

    mysqli_close($connection);

    // Devolver los datos del usuario
    echo '
    
        <form action="update.php" method="post" autocomplete="off">
            <h2>Modificando Registro</h2>

            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                <input type="text" name="id" readonly class="form-control-plaintext" id="id" value="'. $row['id'] .'">
            </div>

            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
                <div class="col-sm-10">
                    <input type="text" name="nombre" class="form-control" id="nombre" value="'. $row['nombre'] .'">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nueva Dirección</label>
                <div class="col-sm-10">
                    <input type="text" name="direccion" class="form-control" id="direccion" value="'. $row['direccion'] .'">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Teléfono</label>
                <div class="col-sm-10">
                    <input type="text" name="telefono" class="form-control" id="telefono" value="'. $row['telefono'] .'">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Correo</label>
                <div class="col-sm-10">
                    <input type="text" name="correo_electronico" class="form-control" id="correo_electronico" value="'. $row['correo_electronico'] .'">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Estado</label>
                <div class="col-sm-10">
                    <input type="text" name="estado" class="form-control" id="estado" value="'. $row['estado'] .'">
                </div>
            </div>
            <div>
                <input type="submit" class="btn btn-success" value="Actualizar">
                <a class="btn btn-danger" href="index.php">Cancelar</a>
            </div>

                </div>

        </form>
    
    ';
  } else {
    // Si no se encuentra ningún usuario con el ID especificado, devolver un arreglo vacío
    return array();
  }
  
} 
?>


<!-- Editar Modal -->
<div class="modal fade" id="editarUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editarUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editarUserModalLabel">Editar el registro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="edit_user_data">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>