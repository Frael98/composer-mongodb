<?php

use MongoDB\Client;

class Database {

    public static function connection(){
        $con = new Client('mongodb://localhost:27017');
        /* return $con->prueba_vs_mongo - Acceso directo a la bd */
        return $con;
    }

}


