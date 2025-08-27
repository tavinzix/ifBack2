<?php
require "../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo "<hr>";

var_dump($_ENV['SECRET_KEY']);