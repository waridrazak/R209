<!DOCTYPE HTML>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../../Outils/style.css" />
		<title>Exercice 2</title>
	</head>
	<body>
		<header>
			<p>Module M2105 : Web Dynamique</p>
		</header>
		<?php include "../../menu.php"?>
		<section>
			<h1>Sujet 1 - Exercice 2</h1>
		<?php 
			$euro = array(
				'Dinar algérien' 	=> 0.00916204,
				'Franc guinéen'		=> 0.000108068,
			    'Livre libanaise' 	=> 0.000479533,
				'Ringgit malais'	=> 0.224482,
				'Dirham marocain'	=> 0.0892160,
				'Euro monégasque'	=> 1,
				'Rouble russe'		=> 0.0203145,
				'Franc CFA'			=> 0.00152449,
				'Dinar tunisien'	=> 0.459187 
			);
			
			echo "<ul>";
			foreach ($euro as $currency => $rate) {
				echo "<li>1 $currency = $rate €</li>";
			}
			echo "</ul>";
		?>
		<h1>Convert</h1>
		<form action="convert.php" method="POST">
			<label for="amount">Montant</label>
			<input type="number" id="amount" name="amount" value="1">
			<p>
			</p>
			<label for="currency">Monnaie</label>
			<select id="currency" name="currency">
				<?php
					foreach ($euro as $currency => $rate) {
						echo "<option value=\"$currency\">$currency</option>";
					}
				?>
			</select>
			<p>
			</p>
			<input type="submit" value="Convertir en euros">
			<p>
			</p>
		</form>
		</section>
	</body>
</html>