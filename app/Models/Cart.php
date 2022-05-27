<?php
namespace Models;

use Database\Database;
use PDO;

class Cart
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

    static public function getCart($userId)
    {
        $sqlQuery = "
            SELECT 
                `cart`.`id` AS `cart_entry_id`,
                `goods`.`id`,
                `goods`.`name`,
                `goods`.`description`,
                `goods`.`price`,
                `goods`.`preview_image`
            FROM `cart`
            INNER JOIN `goods` ON `cart`.`good_id` = `goods`.`id`
            WHERE `cart`.`user_id` = :user_id
        ";
        $params = ['user_id' => $userId];
        return self::fetchAllAssoc($sqlQuery, $params);
    }

    static public function add($userId, $goodId)
    {
        $sqlQuery = "INSERT INTO `cart` (user_id, good_id) VALUES (:user_id, :good_id)";
        $params = [
            'user_id' => $userId,
            'good_id' => $goodId,
        ];
        return self::request($sqlQuery, $params);
    }

    static public function delete($userId, $cartEntryId)
    {
        $sqlQuery = "DELETE FROM cart WHERE cart.user_id = :user_id and cart.id = :cart_entry_id";
        $params = [
            'user_id' => $userId,
            'cart_entry_id' => $cartEntryId,
        ];
        return self::request($sqlQuery, $params);
    }
}
