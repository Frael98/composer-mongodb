<?php
header("Access-Control-Allow-Origin: *"); // Permite las peticiones desde js
use Frael\Testcomposer\Cliente;

class ClienteController {

    private static $model;

    public function __construct()
    {
        self::$model = new Cliente();
    }

    public static function setCliente(){

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        $cliente = self::$model->setCliente(array(
            "nombre" => $nombre,
            "apellido" => $apellido
        ));

      if($cliente){
        header('Location:'.url().'?c=Cliente'); // -> error -> I forgot ':' in Location
      }
    }

    public function index()
    {
        $clientes = self::$model->getClientes();
        include_once './src/view/index.php';
    }

    public static function getCliente()
    {
        /* echo "Get Cliente 1"; */
        $input = json_decode(file_get_contents("php://input"), true);
        
        $cliente = self::$model->getCliente($input['_id']);

        echo $cliente; // No se puede hacer doble return
       /*var_dump($id);
        var_dump($_REQUEST);
        var_dump($_GET);
        var_dump($_SERVER); */

        /* var_dump($input['_id']); */
    }

    /**
     * Elimina un cliente
     */
    public static function deleteCliente()
    {
        $data = json_decode(file_get_contents("php://input"), true);

        $res = self::$model->deleteCliente($data['_id']);

        echo $res;
    }
}