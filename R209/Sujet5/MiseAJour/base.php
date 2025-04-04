<?php

$host = 'localhost';
$dbname = 'ba404222';
$user = 'ba404222';
$pass = 'ba4042222fd4';
$charset = 'utf8mb4';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $user, $pass);
    $pdo->exec('SET NAMES utf8');
} catch (Exception $e) {
    die("Erreur");
}

?>
