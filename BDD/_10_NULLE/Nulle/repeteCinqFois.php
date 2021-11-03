<?php

/*
$reponse = $bdd->prepare("SELECT COUNT(*) 
as cinqFois 
FROM $table_Echiquier
WHERE configurationMap = :cM ");

$reponse->execute(array(
  'cM' => $configurationMap,
));

$donnee = $reponse->fetch();

$cinqFois = $donnee['cinqFois'];

$reponse->closeCursor()
*/

$reponse = $bdd->prepare("SELECT COUNT(*) 
as cinqFois 
FROM $table_Nulle
WHERE configurationMap = :cM ");

$reponse->execute(array(
  'cM' => $configurationMap,
));

$donnee = $reponse->fetch();

$cinqFois = $donnee['cinqFois'];

$reponse->closeCursor()

?>