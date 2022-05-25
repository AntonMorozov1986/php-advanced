<?php
namespace Models;

use Database\Database;
use PDO;

class GoodsList
{
    static private function getDb()
    {
        return Database::getInstance()->getDb();
    }

    static private function fetchAllAssoc($sqlQuery)
    {
        return self::getDb()->query($sqlQuery)->fetchAll(PDO::FETCH_ASSOC);
    }

    static private function fetchAssoc($sqlQuery)
    {
        return self::getDb()->query($sqlQuery)->fetch(PDO::FETCH_ASSOC);
    }

    static public function allQuantity()
    {
        $sqlQuery = "SELECT COUNT(id) AS quantity FROM goods";
        $result =  self::fetchAssoc($sqlQuery);
        return $result['quantity'];
    }

    static public function all()
    {
        $sqlQuery = "SELECT * FROM goods";
        return self::fetchAllAssoc($sqlQuery);
    }

    static public function some($startId = 1, $limit = 3)
    {
        $lastId = ($startId + $limit) - 1;
        $sqlQuery = "SELECT * FROM goods WHERE id >= $startId and id <= $lastId";
        return  self::fetchAllAssoc($sqlQuery);
    }
}
