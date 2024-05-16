<?php
    
    require_once("../head/head.php");
    require_once('../../controller/usernameController.php');

    $obj = new usernameController();
    $rows = $obj->index();
?>

<div class="mb-3">
    <a href="/proyecto/view/username/create.php" class="btn btn-success">Agregar nuevo usuario</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th class="user_id"><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th>
                    
                        <!-- ver -->
                        <a data-id="<?= $row[0]?>" class="btn btn-secondary btn-sm view-data">ver</a>

                        <!-- Editar -->
                        <a data-id="<?= $row[0]?>" class="btn btn-info btn-sm edit_data">Modificar</a>

                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$row[0]?>">Eliminar</a>

                        <!-- Modal -->
                        <div class="modal fade" id="id<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Desea eliminar al usuario <?php echo $row[1] ?> con el id <?php echo $row[0] ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                    <!-- <button type="button" >Eliminar</button> -->
                                </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php
    include 'verModal.php';
    include 'editarModal.php';

    require_once("../head/footer.php");
?>

<script>

// Script para que al momento de presionar el boton traiga el id y se lo enviemos al modal para hacer la consulta a la BDD 
$(document).ready(function () {

        $('.view-data').click(function (e) { 
            e.preventDefault();
            
            let user_id = $(this).closest('tr').find('.user_id').text();
            // console.log(user_id);

            $.ajax({
                method: "POST",
                url: "verModal.php",
                data: {
                    'click_view_btn':true,
                    'user_id':user_id,
                },
                success: function (response) {
                    // console.log(response);

                    $('.view_user_data').html(response);
                    $('#viewUserModal').modal('show');

                }
            });
        });
});

// Editar datos 

$(document).ready(function () {

    $('.edit_data').click(function (e) { 
    e.preventDefault();
    
    let user_id = $(this).closest('tr').find('.user_id').text();
    // console.log(user_id);

    $.ajax({
        method: "POST",
        url: "editarModal.php",
        data: {
            'click_edit_btn':true,
            'user_id':user_id,
        },
        success: function (response) {
            // console.log(response);

            $('.edit_user_data').html(response);
            $('#editarUserModal').modal('show');

        }
    });
});
});

</script>