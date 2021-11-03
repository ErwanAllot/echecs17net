<?php
//utilisé dans AFFICHAGE/Fusion.php

$reponse = $bdd->query("SELECT id, couleur, piece, statut, abcisse, ordonnee FROM $table_Echiquier");

while ($donnees = $reponse->fetch()) {

    $couleur = htmlspecialchars($donnees['couleur']);
    $piece = htmlspecialchars($donnees['piece']);
    $pieceCouleur = $piece.$couleur;     
    $abcisse = htmlspecialchars($donnees['abcisse']);
    $ordonnee = htmlspecialchars($donnees['ordonnee']);
    
    if ($ordonnee % 2 == 0){
        if ($abcisse % 2 == 0)      
        {$tab[$ordonnee][$abcisse] = $carreB . $$pieceCouleur . $carreF;}
        else
        {$tab[$ordonnee][$abcisse] = $carreN . $$pieceCouleur . $carreF;}
    }

    if ($ordonnee % 2 == 1){
        if ($abcisse % 2 == 1)
        {$tab[$ordonnee][$abcisse] = $carreB . $$pieceCouleur . $carreF;}
        else
        {$tab[$ordonnee][$abcisse] = $carreN . $$pieceCouleur . $carreF;}
    } 

} 
$reponse->closeCursor();
?>