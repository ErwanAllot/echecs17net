<?php
// utilisé dans JEU/Saisie.php

$reponse = $bdd->prepare("SELECT * FROM $table_Echiquier 
WHERE abcisse = :X AND ordonnee = :Y ");

$reponse->execute(array(
  'X' => $origineA,
  'Y' => $origineO,
));

$donnees = $reponse->fetch();

  $couleur = $donnees['couleur'];
  $piece = $donnees['piece'];
  $statut = $donnees['statut'];

$reponse->closeCursor()

?>