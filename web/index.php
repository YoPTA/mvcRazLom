<?php

require '../vendor/razlom/core/Loader.php';

$loader = new Loader();

spl_autoload_register([$loader, 'loadClass']);

$router = new \razlom\core\Router();
$router->start();
