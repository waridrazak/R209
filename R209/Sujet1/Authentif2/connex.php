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
			<h1>Sujet 1 - Exercice 3</h1>
			<?php
            if ($login === 'boss' && $mdp === 'boss') {
                echo "Bonjour $login ! Nous sommes le $date.";
            } else {
                header('Location: index.html?error=1');
				exit()
            }
            ?>
			
			</form>
		</section>
	</body>
</html>