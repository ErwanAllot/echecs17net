<?php
// utilisé dans JEU/Saisie.php

$reponse = $bdd->prepare("SELECT * FROM $table_Echiquier 
WHERE abcisse = :X AND ordonnee = :Y ");

$reponse->execute(array(
  'X' => $pieceQuiPeutMettreEchecA,
  'Y' => $pieceQuiPeutMettreEchecO,
));

$donnees = $reponse->fetch();

  $couleurAdversaire = $donnees['couleur'];
  $pieceAdversaire = $donnees['piece'];
  $statutAdversaire = $donnees['statut'];

$reponse->closeCursor()

?>