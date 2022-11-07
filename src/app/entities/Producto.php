<?php
namespace Frael\Testcomposer;

use Database;

class Producto
{

    private static $schema;

    public function __construct()
    {
        $this->schema = Database::connection()->prueba_vs_mongo;
    }

    public static function setProduct($params)
    {
        $collection = self::$schema->product;

        $product = $collection->insert($params);

        return $product;
    }

    public static function getProducts()
    {
        $collection = self::$schema->product;
        return $collection->find();
    }

    public static function getProduct($id)
    {
        $collection = self::$schema->product;
        return $collection->find($id);
    }

    public static function updateProduct($id, $params)
    {
        $message = '';

        $collection = self::$schema->product;

        $product = $collection->updateOne(
            ['_id' => $id],
            ['$set' => $params]
        );

        return $product;
    }
}
