<?php
require_once '../vendor/autoload.php';

use Dotenv\Dotenv;
use Config\Config;

$dotenv = Dotenv::createImmutable(Config::getRoot());
$dotenv->load();
