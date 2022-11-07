<?php
/* require './components/header.php'; */ // i dont have idea what i'm doing
require './src/view/components/header.php';
?>
<div class="row justify-content-center">
    <div class="mx-4 shadow p-3 bg-body rounded">
        <h1 class="mx-4"> Viajes</h1>
    </div>
</div>

<div class="row justify-content-center mx-4 my-4">
    <div class="col-4">
        <?php foreach ($viajes as $viaje) : ?>
            <div class="card mb-3 shadow  mb-5 bg-body rounded">
                <img id="imagen" src="" class="card-img-top " alt="..." style="max-width: 540px;">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $viaje->lugar; ?>
                    </h5>
                    <p class="card-text">
                        <?php echo $viaje->descripcion; ?>.</p>
                    <p class="card-text"><small class="text-muted">Date: <?php $fecha = new DateTime($viaje->fecha);
                    echo $fecha->format(DATE_RSS) ?> </small></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <!-- <div class="col-4">
        <div class="card mb-3">
            <img id="imagen" src="" class="card-img-top " alt="..." style="max-width: 540px;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mb-3">
            <img id="imagen" src="" class="card-img-top " alt="..." style="max-width: 540px;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card mb-3">
            <img id="imagen" src="" class="card-img-top " alt="..." style="max-width: 540px;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mb-3">
            <img id="imagen" src="" class="card-img-top " alt="..." style="max-width: 540px;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div> -->
</div>

<?php
require './src/view/components/footer.php';

?>