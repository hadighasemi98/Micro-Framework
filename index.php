<?php 
include "vendor/autoload.php";

// echo $_SERVER['REQUEST_URI'];
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
echo $_ENV['DB_NAME'];