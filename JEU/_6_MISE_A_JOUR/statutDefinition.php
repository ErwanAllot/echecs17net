<?php
    $nouveauStatut = '';
    
    if (preg_match("#^nIemeDeplacement[0-9]+$#", $statut)){
        if ($destinationO == 0 || $destinationO == 7){
            if ($piece == 'pion'){
                $nouveauStatut = 'promotion'. (string)$tourDeJeu;
            }
        }
        else {$nouveauStatut = 'nIemeDeplacement'. (string)$tourDeJeu;}
    }

    if (preg_match("#^premierDeplacement[0-9]+$#", $statut)){
        $nouveauStatut = 'nIemeDeplacement'. (string)$tourDeJeu;
    }
    
    if ($statut == 'initial'){
        $nouveauStatut = 'premierDeplacement' . (string)$tourDeJeu;
    } 
?>