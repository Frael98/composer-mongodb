<?php
header("Access-Control-Allow-Origin: *"); 
use Frael\Testcomposer\Producto;

class ProductoController {

    private static $model;

    public function __construct()
    {
        self::$model =  new Producto();
    }
    public function index()
    {
        /* $productos = self::$model::getProducts(); */
        include './src/view/products.php';
    }
}