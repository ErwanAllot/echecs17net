<?php

$reponse = $bdd->prepare("SELECT * FROM $table_Nulle WHERE id = :tr ");

$reponse->execute(array(
    'tr' => $tourDeJeu - 1,
  ));
  
$donnee = $reponse->fetch();

$nbTourSansPriseOuPionDeplace = $donnee['nbTourSansPriseOuPionDeplace'];

$reponse->closeCursor()

?>