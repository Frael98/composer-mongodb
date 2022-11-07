<?php

class Viaje
{

    public function __construct()
    {
        $this->collection = Database::connection()->prueba_vs_mongo;
    }

    public function getViajes()
    {
        return $this->collection->viaje->find();
    }
    public function setViaje($params)
    {
        try {
            $new = $this->collection->viaje->insertOne(
              $new = array(
                    "lugar" => $params['lugar'],
                    "descripcion" => $params['descripcion'],
                    "fecha" => $params['fecha'],
                    "image" => $params['image']
                )
            );
            return $new;
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
    }
}
