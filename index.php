<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\Config;
use App\Core\Encryptor;
use App\Core\Router;

Config::load();
Encryptor::init();

$encryptedUrl = $_GET['q'] ?? '';

if (!$encryptedUrl) {
    die("No route specified!");
}

$router = new Router();
$router->route($encryptedUrl);
