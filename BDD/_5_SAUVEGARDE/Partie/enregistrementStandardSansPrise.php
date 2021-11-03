<?php

$reponse = $bdd->prepare("INSERT INTO $table_Partie 
(tourDeJeu, 
couleur, piece, statut, abcisse, ordonnee, 
mouvement, 
pieceAdv, statutAdv, abcisseAdv, ordonneeAdv
)
VALUES
(:T, 
:C, :P, :S, :X, :Y, 
:M, 
:PA, :SA, :AA, :OA
)"
);

$reponse->execute([
    'T' => $tourDeJeu,
    'C' => $couleur,
    'P' => $piece,
    'S' => $statut,
    'X'=> $origineA,
    'Y' => $origineO,
    'M' => 'deplacement',
    'PA'=> '',
    'SA'=> '',
    'AA'=> $destinationA,
    'OA'=> $destinationO,
]);
  
$reponse->closeCursor()

?>