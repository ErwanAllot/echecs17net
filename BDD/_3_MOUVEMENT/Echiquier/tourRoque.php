<?php
// utilisé dans JEU/Saisie.php

$reponse = $bdd->prepare("SELECT * FROM $table_Echiquier 
WHERE abcisse = :X AND ordonnee = :Y ");

$reponse->execute(array(
  'X' => $tourRoqueA,
  'Y' => $destinationO,
));

$donnees = $reponse->fetch();

  $couleurTourRoque = $donnees['couleur'];
  $pieceTourRoque = $donnees['piece'];
  $statutTourRoque = $donnees['statut'];

$reponse->closeCursor()

?>