<?php

/*
$reponse = $bdd->prepare("DELETE FROM chess_joueur WHERE couleur = :b  ");

$reponse->execute(array(
  'b' => 'Blanc'
  ));
  
$reponse->closeCursor()
*/


$reponse = $bdd->prepare("DELETE FROM $table_joueur WHERE couleur = :b OR couleur = :n ");

$reponse->execute(array(
  'b' => 'Blanc',
  'n' => 'Noir',
  ));

  $reponse->closeCursor()


?>