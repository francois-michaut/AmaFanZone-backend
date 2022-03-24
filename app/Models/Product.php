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

            
            $sql = "SELECT * FROM `products` ORDER BY `created_at` DESC LIMIT 3";

            $pdoStatement = $pdo->query( $sql );

            $products = $pdoStatement->fetchAll( PDO::FETCH_ASSOC );
            
            return $products;
    }

    public function findNewsForHome()
    {
            $pdo = Database::getPDO();

            $sql = "SELECT *
            FROM `products`
            INNER JOIN `categories` ON `categories`.`id`= `category_id` ORDER BY `price`
            LIMIT 3,5
             ";

            $pdoStatement = $pdo->query( $sql );

            $products = $pdoStatement->fetchAll( PDO::FETCH_ASSOC );
            
            return $products;
    }

    public function findBestproduct()
    {
            $pdo = Database::getPDO();

            $sql = "SELECT * FROM `products` ORDER BY `price` LIMIT 5 ";
            
            $pdoStatement = $pdo->query( $sql );

            $productList = $pdoStatement->fetchAll( PDO::FETCH_ASSOC );

            return $productList;
    }

    public function findNewProduct()
    {
            $pdo = Database::getPDO();

            $sql = "SELECT * FROM `products` INNER JOIN `categories` ON `categories`.`id`= `category_id` ORDER BY `created_at` DESC LIMIT 5";

            $pdoStatement = $pdo->query( $sql );

            $productList = $pdoStatement->fetchAll( PDO::FETCH_ASSOC );

            return $productList;
        }
}