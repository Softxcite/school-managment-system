<?php

require_once __DIR__ . '/./vendor/autoload.php';

use App\Core\Config;
use App\Core\Encryptor;
use App\Core\Router;

Config::load();
Encryptor::init();

$encryptedUrl = $_GET['q'] ?? '';
print_r($encryptedUrl);
die();
if (!$encryptedUrl) {
    $encryptedUrl = Encryptor::encrypt('home/index');
}

$router = new Router();
$router->route($encryptedUrl);
