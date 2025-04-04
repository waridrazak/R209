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

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../Outils/style.css">
    <title>Module R209</title>
</head>

<body>
    <header>Module R209 : Web Dynamique</header>
    <?php 
    include "../../menu.php"; 
    ?>
    <section>
        <h1>
            Sujet 5 - Connexion
        </h1>
    </section>
</body>
</html>