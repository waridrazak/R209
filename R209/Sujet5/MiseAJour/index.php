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
        <?php
        include "../../menu.php";
        require_once("base.php");

        try {
            $stmt = $pdo->query("SELECT devise FROM EURO");
            $devises = $stmt->fetchAll(PDO::FETCH_COLUMN);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            exit;
        }
        ?>

        <form action="maj.php" method="POST">
            <label for="devise">La devise :</label>
            <select name="devise" id="devise">
                <?php foreach ($devises as $devise): ?>
                    <option value="<?= htmlspecialchars($devise) ?>">
                        <?= htmlspecialchars($devise) ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <p>
                <label for="taux">Nouveau taux :</label>
                <input type="number" name="taux" id="taux" step="any" required>
            </p>

            <input type="submit" value="Mettre à jour">
        </form>
    </section>
</body>
</html>