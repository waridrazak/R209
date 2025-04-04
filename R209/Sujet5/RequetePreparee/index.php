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
        try {
            $stmt = $pdo->query("SELECT devise, valeur FROM EURO");
            $euro = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            exit;
        }
        ?>

        <h1>Convert</h1>
        <form action="convert.php" method="POST">
            <label for="amount">Montant</label>
            <input type="number" id="amount" name="amount" value="1" step="any">

            <p>
                <label for="currency">Monnaie</label>
                <select id="currency" name="currency">
                    <?php
                    foreach ($euro as $row) {
                        $devise = htmlspecialchars($row['devise']);
                        echo "<option value=\"$devise\">$devise</option>";
                    }
                    ?>
                </select>
            </p>

            <p>
                <input type="submit" value="Convertir en euros">
            </p>
        </form>
    </section>
</body>
</html>