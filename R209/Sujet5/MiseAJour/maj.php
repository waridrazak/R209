<?php
include "../../menu.php";
require_once("base.php");


$devise = $_POST['devise'];
$taux = floatval($_POST['taux']);

try {
    $stmt = $pdo->prepare("UPDATE EURO SET valeur = ? WHERE devise = ?");
    $stmt->execute([$taux, $devise]);

} catch (PDOException $e) {
    echo "Erreur lors de la mise à jour : " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="../../Outils/style.css" />
    <title>Module R209</title>
</head>
<body>
	<header>Module R209 : Web Dynamique</header>
    <section>
		<h1>
            Sujet 5 - MiseAJour
        </h1>
        <p>Le taux a été mis à jour.</p>
        <?php
        include "../../menu.php";
        ?>
    </section>
</body>
</html>
