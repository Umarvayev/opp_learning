<?php
require_once 'autoloat.php';

$database = new Database('127.0.0.1','oop','root', '');
$pdo = $database ->connect();
Post::$pdo = $pdo;
?>

