<?php
$login = isset($_POST['login']) ? htmlspecialchars($_POST['login']) : '';
$mdp = isset($_POST['mdp']) ? htmlspecialchars($_POST['mdp']) : '';
$date = date('d/m/Y');


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
			<h1>Sujet 1 - Exercice 2</h1>
			<?php
            if ($login === 'boss' && $mdp === 'boss') {
                echo "Bonjour $login ! Nous sommes le $date.";
            } else {
                echo "Tu dois être authentifié pour connaître la date ! <a href='index.html'>Retourne au formulaire</a>";
            }
            ?>
			
			</form>
		</section>
	</body>
</html>