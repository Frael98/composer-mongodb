<?php
require './src/view/components/header.php'
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">

            <form class="card card-body shadow p-3 mb-5 bg-body rounded" action="?c=Viaje&m=setViaje" method="post" enctype='multipart/form-data'>
                <div class="card-title">
                    <h3> Registrar Viaje</h3>
                </div>
                <div class="form-floating mb-2">
                    <input id="lugar" type="text" class="form-control" placeholder="Lugar" name="lugar">
                    <label for="lugar">Lugar</label>
                </div>
                <div class="input-group mb-2">
                    <input type="file" class="form-control" id="inputGroupFile01" name="image">
                </div>
                <div class="form-floating mb-2">
                    <input id="descripcion" type="text" class="form-control" placeholder="Descripcion" name="descripcion">
                    <label for="descripcion">Descripcion</label>
                </div>
                <div class="form-floating mb-2">
                    <input id="fecha" type="date" class="form-control" name="fecha">
                    <label for="fecha">Fecha</label>
                </div>
                <div class="form-group mb-2">
                    <button id="liveToastBtn" type="submit" class="btn btn-success"> Save </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> -->

<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <!-- <img src="" class="rounded me-2" alt="..."> -->
            <strong class="me-auto">Mensaje</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Datos guardos correctamente!
        </div>
    </div>
</div>

<?php
require './src/view/components/footer.php'
?>