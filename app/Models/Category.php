<?php

namespace AmaFanZone\Models;

use PDO;
use AmaFanZone\Utils\Database;
use AmaFanZone\Models\CoreModel;

class Category extends CoreModel
{
    public function findAll()
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `categories` ";

        $pdoStatement = $pdo->query( $sql );

        $categoryList = $pdoStatement->fetchAll( PDO::FETCH_ASSOC );

        return $categoryList;
    }
}