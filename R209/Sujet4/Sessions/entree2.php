<?php
session_start();
if (!isset($_SESSION['auth'])) {
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
			<h1>Entrée 2</h1>
			
			<p>Blo blo blo</p>
		</section>
	</body>
</html>