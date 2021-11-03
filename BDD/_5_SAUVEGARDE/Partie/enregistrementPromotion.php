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
    'P' => $pion,
    'S' => '',
    'X'=> 8,
    'Y' => 8,
    'M' => 'promotion',
    'PA'=> $piece,
    'SA'=> $statut,
    'AA'=> 8,
    'OA'=> 8,
]);
  
$reponse->closeCursor()

?>