<?php

namespace Frael\Testcomposer;

use MongoDB\BSON\ObjectId;
use Database;
use Exception;
use MongoDB\Model\BSONArray;

class Cliente
{
    // No se puede hacer un orm
    /*  #[BSONArray('id')]
    public $id;
    public $nombre;
    public $fecha_registro;
    public $direccion;
    private $conec;
 */
    public function __construct()
    {
        $this->conec = Database::connection()->prueba_vs_mongo;
    }

    public function setCliente($params)
    {
        try {
            $collection = $this->conec->cliente;

            $new_cliente = $collection->insertOne([
                "name" => $params['nombre'],
                "lastname" => $params['apellido'],
                "edad" => 24
            ]);

            return $new_cliente != null;
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }

    public function getClientes()
    {

        $collection = $this->conec->cliente;

        $clientes = $collection->find();
        return $clientes;
    }

    public function getCliente($id)
    {

        $collection = $this->conec->cliente;

        $_id = new ObjectId($id);

        $cliente = $collection->findOne(array("_id" => $_id));
        return (json_encode($cliente)); // no usar return (-_-')
    }

    public function deleteCliente($id)
    {
        $collection = $this->conec->cliente;

        $id = new ObjectId($id);
        $deleted = $collection->deleteOne(
            array( '_id' => $id)
        );

        return json_encode($deleted);//Convertimos a json
    }
}
