<?php
namespace Database;

use PDO;
use Traits\SingletoneTrait;

class Database
{
    use SingletoneTrait;

    private PDO $db;

    public function getDb(): PDO
    {
        return $this->db;
    }

    protected function instanceInit(): void
    {
        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASS'];
        $this->db = new PDO($this->getDSN(), $user, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    private function getDSN(): string
    {
        $driver = $_ENV['DB_DRIVER'];
        $host = $_ENV['DB_HOST'];
        $name = $_ENV['DB_NAME'];
        return "{$driver}:host={$host};dbname={$name}";
    }
}
