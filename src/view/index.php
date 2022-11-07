<?php
/* require_once getcwd().'/src/view/components/header.php'; */
require_once './src/view/components/header.php';
?>

<div class="row justify-content-center mb-3">
    <div class="col-6">
        <div class="card card-body mb-6">
            <form action="./index.php?c=Cliente&m=setCliente" method="POST">
                <input class="form-control mb-2" type="text" placeholder="Nombre" name="nombre">
                <input class="form-control mb-2" type="text" placeholder="Apellido" name="apellido">

                <button class="btn btn-success" type="submit">Guardar</button>
            </form>
        </div>
    </div>
</div>

<div class="row justify-content-center">
<div class='table-wrapper-scroll-y my-custom-scrollbar col-md-8'>
        <table class="table table-striped table-dark table-sm">
            <thead class="">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) : ?>
                    <tr>
                        <td> <?php echo $cliente->name ?></td>
                        <td> <?php echo $cliente->lastname ?></td>
                        <td> <?php echo $cliente->edad ?></td>
                        <td>
                            <a 
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                            onclick="setModal('<?php echo $cliente->_id ?>')" class="btn btn-primary"> Editar </a>
                            <a 
                            onclick="deleteCliente('<?php echo $cliente->_id ?>')"
                            class="btn btn-danger"> Eliminar </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Datos del Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <input class="form-control mb-3" type="text" name="name" placeholder="Nombre" id="mNombre">
               <input class="form-control mb-3" type="text" name="lastname" placeholder="Apellido" id="mApellido">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<?php     require './src/view/components/footer.php';
?>
