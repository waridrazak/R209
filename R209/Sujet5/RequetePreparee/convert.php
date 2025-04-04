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
            Sujet 5 - RequetePreparee
        </h1>
        <?php
        include "../../menu.php";
        require_once("base.php");

        $amount = floatval($_POST['amount']);
        $currency = $_POST['currency'];

        try {
            $stmt = $pdo->prepare("SELECT valeur FROM EURO WHERE devise = ?");
            $stmt->execute([$currency]);
            $rate = $stmt->fetchColumn();

            if ($rate) {
                $converted = $amount * $rate;
                echo "<p>&nbsp&nbsp&nbsp&nbsp$amount $currency = " . number_format($converted, 2) . " €</p>";
            } else {
                echo "<p>Devise inconnue.</p>";
            }
        } catch (PDOException $e) {
            echo "Erreur lors de la conversion : " . $e->getMessage();
        }
        ?>
    </section>
</body>
</html>