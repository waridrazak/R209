<?php
    $now = date("d/m/y à H:i:s");
    $msg = "";

    if (isset($_COOKIE['dervisit'])) {
        $msg = "Ta dernière visite sur cette page date du " . $_COOKIE['dervisit'];
    } else {
        $msg = "Bienvenue, c'est ta première visite sur cette page.";
    }
    setcookie("dervisit", $now, time() + 365 * 24 * 60 * 60);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../Outils/style.css" />
    <title>Module R209</title>
</head>
<body>
    <header>
		<p>Module R209 : Web Dynamique</p>
	</header>
    <section>
        <h1>Sujet 4 - Exercice 3</h1>
        <p>Bonjour nous sommes le <?php echo $now; ?>.</p>
        <p><?php echo $msg; ?></p>
    </section>
</body>
</html>