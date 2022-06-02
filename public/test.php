<?php
//phpinfo();
require_once dirname(__DIR__) . '/app/init_app.php';

$driver = $_ENV['DB_DRIVER'];
$host = $_ENV['DB_HOST'];
$name = $_ENV['DB_NAME'];
$DSN = "{$driver}:host={$host};dbname={$name}";

$pdo = new PDO($DSN, $_ENV['DB_USER'], $_ENV['DB_PASS'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];
?>
<h3>Проверка работы php</h3>
<p>Если вы видите версию mySQL, то это значит, что все запущено успешно. &#128640; &#127881;</p>
<hr>
<h3>Информация о PHP</h3>
<details>
    <summary><b>phpinfo</b></summary>
    <?php phpinfo()?>
</details>
<a class="link" href="/">&#9166; Вернуться на главную</a>
<style>
.link {
    text-decoration: none;
    font: inherit;
    color: inherit;
}
</style>
