<?php

ob_start("ob_gzhandler");

session_start();

require_once '../Core/ModuleManager.php';
require_once '../Core/Loader.php';

Core\Loader::loadcore();

$manager = new Core\ModuleManager();

$router  = new Core\Router($manager);
$router->route();

$manager->checkModule();

Core\Loader::loadmodule($manager->controller);
Core\Loader::loadaddition($manager);
Core\Loader::loadmodel();

$manager->checkMethod();
$manager->run();

ob_flush();