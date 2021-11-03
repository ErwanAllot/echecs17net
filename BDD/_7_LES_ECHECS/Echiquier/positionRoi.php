<?php
// utilisé dans JEU/Saisie.php

$reponse = $bdd->prepare("SELECT * FROM $table_Echiquier 
WHERE couleur = :C AND piece = :P");

$reponse->execute(array(
  'C' => $couleurRoi,
  'P' => 'roi',
));

$donnees = $reponse->fetch();

  $statutRoi = $donnees['statut'];
  $abcisseRoi = $donnees['abcisse'];
  $ordonneeRoi = $donnees['ordonnee'];

$reponse->closeCursor()

?>