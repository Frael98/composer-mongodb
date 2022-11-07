<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MongoDB PHP</title>
    <link rel="stylesheet" href="../../../vendor/twbs/bootstrap/dist/css/bootstrap.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <div class="container-fluid">
            <a class="navbar-brand">PHP - Mongo CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?c=Cliente">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo '?c=Producto' ?>">Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toogle"  role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">Viajes</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?c=Viaje&m=registroViajes">Registrar Viaje</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?php echo '?c=Viaje' ?>">Lista de Viajes</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>