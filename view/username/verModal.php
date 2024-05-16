<?php 

$connection = mysqli_connect("btjo445btnvw5ygqf5m2-mysql.services.clever-cloud.com", "u98vz4fkujkxjskm", "arMBMpQOENb8Otqya5df", "btjo445btnvw5ygqf5m2");


  if( isset($_POST['click_view_btn']) ) {
    $id = $_POST['user_id'];

    $sql = "SELECT * FROM username WHERE id='$id'";
    $fetch_query_run = mysqli_query($connection, $sql);

    if( mysqli_num_rows($fetch_query_run) > 0 ) {

      while( $row = mysqli_fetch_array($fetch_query_run) ){

        echo '

        <div class="card" style="width: 100%;">
        <div class="card-header">
          Detalles de registro
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Id: </strong>'. $row['id'] .'</li>
          <li class="list-group-item"><strong>Nombre: </strong>'. $row['nombre'] .'</li>
          <li class="list-group-item"><strong>Dirección: </strong>'. $row['direccion'] .'</li>
          <li class="list-group-item"><strong>Teléfono: </strong>'. $row['telefono'] .'</li>
          <li class="list-group-item"><strong>Correo: </strong>'. $row['correo_electronico'] .'</li>
          <li class="list-group-item"><strong>Estado: </strong>'. $row['estado'] .'</li>
        </ul>
      </div>

        ';

      }

      mysqli_close($connection);

    } else {
      echo '<h4>No hay datos</h4>';

    }
    
  } 

?>



<!-- Modal -->
<div class="modal fade" id="viewUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="viewUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="viewUserModalLabel">Detalles del registro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="view_user_data">
              
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>