<?php

$reponse = $bdd->prepare("INSERT INTO $table_Echiquier(couleur, piece, statut, abcisse, ordonnee) 
VALUES (:C, :P, :S, :X, :Y)");

$reponse->execute([
    'C' => $couleur,
    'P' => $piece,
    'S' => $statut,
    'X' => $abcisse,
    'Y' => $ordonnee,
]);
  
$reponse->closeCursor()

?>