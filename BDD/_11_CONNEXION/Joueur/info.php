<?php

$reponse = $bdd->prepare("SELECT * FROM $table_joueur WHERE couleur = :b OR couleur = :n ");

$reponse->execute(array(
    'b' => 'Blanc',
    'n' => 'Noir',
  ));
  
$donnee = $reponse->fetch();

$coupJoue = $donnee['coup'];
$tempsDebutJeu = $donnee['tempsDeJeu'];

$reponse->closeCursor()

?>