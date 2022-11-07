<?php 
header("Access-Control-Allow-Origin: *"); 
/* REQUIRE -> EMITE UN ERROR FATAL Y TERMINA LA EJECUCION DEL PROGRAMA SI NO ENCUENTRA EL ARCHIVO -> USADO CON ARCHIVOS IMPORTANTES EX: CONECCION A BD
    INCLUDE -> SOLO EMITE UNA ADVERTENDCIA Y CONTINUA LA EJECUCION
*/
/* Necesario para cargar las librerias */
/* echo getcwd(); */
require './vendor/autoload.php'; /* Carga automatica de los archivos autoload -- Namespace */
require './src/config/database.php';
/* require './src/app/entities/Cliente.php';  */// require para importar
require './src/helpers/route.php';

$clase = $_GET['c'];
$metodo = $_GET['m'];

$fileController = './src/app/controllers/' . $clase . 'Controller.php';
$fileModel = './src/app/entities/'. $clase . '.php';
$controllerClase = $clase. 'Controller';

require $fileController;
require $fileModel;

$clase = new $controllerClase;

if(!isset($metodo)){
    $clase->index();
}else{
    call_user_func(array($clase, $metodo)); // -> that's the correct way to use
}


