<?php

$reponse = $bdd->prepare("INSERT INTO $table_Echiquier(couleur, piece, statut, abcisse, ordonnee) 
VALUES (:C, :P, :S, :X, :Y)");

$reponse->execute([
    'C' => $couleurAdv,
    'P' => $pieceAdv,
    'S' => $statutAdv,
    'X' => $abcisseAdv,
    'Y' => $ordonneeAdv,
]);
  
$reponse->closeCursor()

?>