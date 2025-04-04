<?php
require "Outils/outils.php";

$repertoire = dirname(__FILE__);
$sujets = listeRep($repertoire);

$isnotSujet = preg_match('/\/R209\//', $_SERVER['SCRIPT_NAME']);
$isInSujet = preg_match('/\/R209\/Sujet\d+\//', $_SERVER['SCRIPT_NAME']);
$isInSujet3 = preg_match('/\/R209\/Sujet3\/Fichiers/', $_SERVER['SCRIPT_NAME']);
$isInSujet2 = preg_match('/\/R209\/Sujet2\/Fonctions/', $_SERVER['SCRIPT_NAME']);
$isInSujet22 = preg_match('/\/R209\/Sujet2\/Tableux\d+\//', $_SERVER['SCRIPT_NAME']);
$isInSujet1 = preg_match('/\/R209\/Sujet1\/Authentif\d+\//', $_SERVER['SCRIPT_NAME']);
$isInSujet5 = preg_match('/\/R209\/Sujet5\/Connexion/', $_SERVER['SCRIPT_NAME']);
$isInSujet52 = preg_match('/\/R209\/Sujet5\/RequetePreparee/', $_SERVER['SCRIPT_NAME']);
$isInSujet53 = preg_match('/\/R209\/Sujet5\/MiseAJour/', $_SERVER['SCRIPT_NAME']);
?>

<nav>
  <ul>
    <?php
    foreach ($sujets as $sujet) {
        if (is_dir($repertoire . '/' . $sujet) && preg_match('/^Sujet\d+$/', $sujet)) {
            echo "<li>$sujet";
            echo "<ul>";
            echo "<li><a href='http://isis.unice.fr/~escazut/ext/R209/Exercices/" . strtolower($sujet) . ".php' target='_blank'>Énoncé</a></li>";
            if ($isInSujet2 || $isInSujet1 || $isInSujet22 || $isInSujet3 || $isInSujet5 || $isInSujet52 || $isInSujet53 ){
                echo "<li><a href=\"../../$sujet/\" >Réponse</a></li>";
            } elseif ($isInSujet) {
                echo "<li><a href=\"../$sujet/\" >Réponse</a></li>";
            } elseif ($isnotSujet) {
                echo "<li><a href=\"$sujet/\" >Réponse</a></li>";
            }

            echo "</ul>";
            echo "</li>";
        }
    }
    ?>
  </ul>
</nav>