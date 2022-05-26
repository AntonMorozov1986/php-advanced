<?php
require_once dirname(__DIR__) . '/app/init_app.php';

use Database\Database;

function makeDbRequest($sqlQuery)
{
    try {
        $db = Database::getInstance()->getDb();
        $request = $db->prepare($sqlQuery);
        $request->execute();
        echo "$sqlQuery" . "=>>><br>successfully<br>";
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }

}

$usersTableQuery = "CREATE TABLE `users` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT, `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`email`)) ENGINE = InnoDB;";

$goodsTableQuery = "CREATE TABLE `goods` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `name` VARCHAR(127) NOT NULL , `description` TEXT NOT NULL , `price` INT UNSIGNED NOT NULL , `preview_image` VARCHAR(255) NOT NULL , `big_image` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

$cartTableQuery = "CREATE TABLE `cart` (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `user_id` INT UNSIGNED NOT NULL , `good_id` INT UNSIGNED NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

$cartForeignKeysQuery = "ALTER TABLE `cart` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE CASCADE; ALTER TABLE `cart` ADD FOREIGN KEY (`good_id`) REFERENCES `goods`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;";

echo "init_db.php </br>";

if ($_GET['pass'] === $_ENV['DB_PASS']) {
    echo "<h3>you pass</h3>";
    try {
        makeDbRequest($goodsTableQuery);
        makeDbRequest($usersTableQuery);
        makeDbRequest($cartTableQuery);
        makeDbRequest($cartForeignKeysQuery);
    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }
}
