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

    static private function request(string $sqlQuery = "", array $params = [])
    {
        $db = self::getDb();
        $statement = $db->prepare($sqlQuery);
        $statement->execute($params);
        return $statement;
    }

    static private function fetchAllAssoc(string $sqlQuery = "", array $params = [])
    {
        return self::request($sqlQuery, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    static private function fetchAssoc(string $sqlQuery = '', array $params = [])
    {
        return self::request($sqlQuery, $params)->fetch(PDO::FETCH_ASSOC);
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
        $sqlQuery = "SELECT * FROM goods WHERE id >= :startId and id <= :lastId";
        $params = [
            'startId' => $startId,
            'lastId' => $lastId,
        ];
        return  self::fetchAllAssoc($sqlQuery, $params);
    }

    static public function getGoodById($goodId)
    {
        $sqlQuery = "SELECT * FROM goods WHERE id = :goodId";
        $params = ['goodId' => $goodId];
        return self::fetchAssoc($sqlQuery, $params);
    }
}
