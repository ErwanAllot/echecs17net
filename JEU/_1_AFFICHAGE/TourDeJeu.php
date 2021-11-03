<?php

$partieBlanche = '<div id="tourBlanc" class="dimension2"><span>Tour de jeu : ';
$partieNoire = '<div id="tourNoir" class="dimension2"><span>Tour de jeu : ';
$partieFin = '</span></div>';

aQuiDeJouer($tourDeJeu);
($tourDeJeu % 2 == 1) ?
$affichageTr = $partieBlanche . $tourDeJeu . '</br>' . $affichageTr . $partieFin :
$affichageTr = $partieNoire . $tourDeJeu . '</br>' . $affichageTr . $partieFin;
echo $affichageTr;

?>