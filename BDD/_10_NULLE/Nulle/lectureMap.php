<?php

$reponse = $bdd->prepare("SELECT * FROM $table_Nulle WHERE id = :tr ");

$reponse->execute(array(
    'tr' => $ligneAInspectee,
  ));
  
$donnee = $reponse->fetch();

$lectureMap = $donnee['configurationMap'];

$reponse->closeCursor()

?>