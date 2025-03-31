<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>M2105</title>
	</head>
	<body>
		<?php include "../../menu.php"?>
		<?php 
			include_once '../../Outils/outils.php';
			$varsimple = "Bonjour bonjour";
			debug($varsimple);

			$tab = [10,15,30];
			debug($tab);

			$tabassociatif = [
				'nom' => 'PLASSE',
				'prenom' => 'Anne',
			    'age' => 25, 
			];
			debug($tabassociatif);
		?>
	</body>
</html>