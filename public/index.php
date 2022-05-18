<?php
require_once '../vendor/autoload.php';

use Config\Config;

echo "php start";
var_dump(Config::getRoot());
