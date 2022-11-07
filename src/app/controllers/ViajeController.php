<?php

class ViajeController
{

    private static $model;

    public function __construct()
    {
        self::$model = new Viaje;
    }

    public function index()
    {
        $viajes = self::$model->getViajes();
        
        include_once './src/view//viaje/listado.php';
    }

    public function registroViajes()
    {
        include_once './src/view/viaje/viaje.php';
    }

    public function setViaje()
    {
        $lugar = $_POST['lugar'];
        $descripcion = $_POST['descripcion'];
        $fecha = $_POST['fecha'];
        $image = $_FILES['image'];

        $new = self::$model->setViaje(
            array(
                "lugar" => $lugar,
                "descripcion" => $descripcion,
                "fecha" => $fecha,
                "image" => $image
            )
        );
        if($new != null){
            header('Location:'. url(). '?c=Viaje&m=registroViajes');
        }

        echo $new;
    }
}
