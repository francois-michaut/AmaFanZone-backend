<?php

namespace AmaFanZone\Models;

use PDO;
use AmaFanZone\Utils\Database;
use AmaFanZone\Models\CoreModel;

class Product extends CoreModel
{
    public function findAllForHome()
    {
            $pdo = Database::getPDO();

            $sql = "SELECT * FROM `products` LIMIT 3";

            $pdoStatement = $pdo->query( $sql );

            $products = $pdoStatement->fetchAll( PDO::FETCH_ASSOC );
            
            return $products;
    }

    public function findNewsForHome()
    {
            $pdo = Database::getPDO();

            $sql = "SELECT * FROM `products` WHERE `id`>3  LIMIT 5";

            $pdoStatement = $pdo->query( $sql );

            $products = $pdoStatement->fetchAll( PDO::FETCH_ASSOC );
            
            return $products;
    }
}