<?php
require_once './src/view/components/header.php';
?>

<div class="row justify-content-center mb-3">
    <div class="col-6">
        <div class="card card-body mb-6">
            <form action="./index.php?c=Producto&m=setProduct" method="POST">
                <div class="form-floating mb-2">
                    <input id="floatingProduct" class="form-control" type="text" name="producto" placeholder="Producto">
                    <label for="floatingProduct">Producto</label>
                </div>
                <div>
                    <input class="form-control mb-2" type="text" placeholder="Apellido" name="apellido">
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-success btn-block" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- <div class="row justify-content-center">
    <div class='table-wrapper-scroll-y my-custom-scrollbar col-md-8'>
        <table class="table table-striped table-dark table-sm">
            <thead class="">
                <tr>
                    <th>Nombre Producto</th>
                    <th>Precio</th>
                    <th>Importacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) : ?>
                    <tr>
                        <td> <?php echo $producto->nombre ?></td>
                        <td> <?php echo $producto->precio ?></td>
                        <td> <?php echo $producto->edad ?></td>
                        <td>
                            <a  onclick="setModal('<?php echo $producto->_id ?>')" class="btn btn-primary"> Editar </a>
                            <a class="btn btn-danger"> Eliminar </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div> -->

<?php
require_once './src/view/components/footer.php';
?>