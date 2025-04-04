<?php
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$login = $_POST['login'] ?? '';
		$mdp = $_POST['mdp'] ?? '';

		if ($login === 'boss' && $mdp === 'boss') {
			$_SESSION['auth'] = true;
		} else {
			header("Location: index.php?msg=err");
			exit();
		}
	}

	if ($_SESSION['auth'] !== true) {
		header("Location: index.php");
		exit();
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>Module M2105</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header>
			<p>Module M2105 : Web Dynamique</p>
		</header>

		<!-- Un menu -->
<?php
	include("menu.php");
?>
		
		<!-- La section -->
		<section>
			<h1>Entrée 1</h1>
			
			<p>Bla bla bla</p>
		</section>
	</body>
</html>