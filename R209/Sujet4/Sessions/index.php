<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>M2105</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header>
			<p>Module M2105 : Web Dynamique</p>
		</header>
				
		<!-- Le contenu (1 seule section suffit) -->	
		<section>
			<h1>Sujet 4 - Exercice 2</h1>

<!-- Début du HTML généré par PHP -->			
<?php
	if ($_GET['msg'] == 'err') {
		echo "<p><strong>Login ou mot de passe incorrect. Veuillez recommencer.</strong></p>";
	}

	if (isset($_GET['logout'])) {
		echo "<p><strong>Vous avez été déconnecté.</strong></p>";
	}
?>
<!-- Fin du HTML généré par PHP -->			

			<p>Veuillez vous identifier</p>
			<form method="POST" action="./entree1.php">
				<p><label for="login">Login</label><input id="login" name="login" type="text" required autofocus/></p>
				<p><label for="mdp">Mot de passe</label><input id="mdp" name="mdp" type="password" required /></p>
				<p><button id="envoi" name="envoi" type="submit" value="envoi">Connnexion</button></p>
			</form>
		</section>
	</body>
</html>