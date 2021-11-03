<?php

$reponse = $bdd->prepare("INSERT INTO $table_joueur(couleur,coup, tempsDeJeu) 
VALUES(:c, :p, :t)");

$reponse->execute([
    'c' => $couleurJoueur,
    'p' => $coup,
    't' => $tempsDeJeu,
]);
  
$reponse->closeCursor()

 
?>