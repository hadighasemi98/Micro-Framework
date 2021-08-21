<?php
define('BASE_PATH' , __DIR__.'/../');

include BASE_PATH . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

$request = new App\Core\Request();

include BASE_PATH . "Helpers/helpers.php";  
include BASE_PATH . "Routes/web.php";  