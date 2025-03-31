<!DOCTYPE HTML>
<html lang = "fr" >
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>Sujet 3</title>
	</head>
	<body>
		<header>Module M2105 : Web Dynamique</header>
		<?php include "../../menu.php"?>
		<section>
			<h1>
				Sujet 3 - Exercice 1
			</h1>
			<h2>Contenu de mon répertoire R209 : </h2>
			<ul>
				<?php
				require "../../Outils/outils.php";
				$repertoire="../../.";
				$files = listeRep($repertoire);
				foreach ($files as $file) {
					echo "<li>$file</li>";
				}
				?>
			</ul>
		</section>
	</body>
</html>