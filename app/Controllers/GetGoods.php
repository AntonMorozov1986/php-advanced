<?php
namespace Controllers;

use Database\Database;
use PDO;

class GetGoods
{
    static private function getDb()
    {
        return Database::getInstance()->getDb();
    }

    static private function fetchAllAssoc($sqlQuery)
    {
        return self::getDb()->query($sqlQuery)->fetchAll(PDO::FETCH_ASSOC);
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
