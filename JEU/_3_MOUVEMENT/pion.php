<?php

// SE DÉPLACE VERS L'AVANT
if (abs($origineA - $destinationA) != 0) non();

if (abs($origineO - $destinationO) > 2) non();

if ($couleur == 'Blanc'){
    if ($origineO - $destinationO < 0) non();
    if ($origineO != 6 && abs($origineO - $destinationO) > 1) non();
}

if ($couleur == 'Noir'){
    if ($origineO - $destinationO > 0) non();
    if ($origineO != 1 && abs($origineO - $destinationO) > 1) non();
}

// NE MANGE PAS PAR DEVANT
if ($aLeDroit == 1){
    if ($caseDestinationAvecPiece == 1) non();
    else if (abs($origineO - $destinationO) == 2){
        $voyageA = $origineA;
        if ($couleur == 'Blanc'){$voyageO = $origineO - 1;}
        if ($couleur == 'Noir') {$voyageO = $origineO + 1;}
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        if ($caseTraverseeAvecPiece == 1) non();
    }
}

// MOUVEMENTS DE PRISES
if (abs($origineA - $destinationA) == 1 && abs($origineO - $destinationO) == 1){
    if ($caseDestinationAvecPiece == 1){
        
        if ($couleur == 'Noir' && $origineO < $destinationO) oui();
        if ($couleur == 'Blanc' && $origineO > $destinationO) oui();
    }   
    if ($caseDestinationAvecPiece == 0) {
        oui();
        
        $voyageA = $destinationA;
        $voyageO = $origineO;
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        if ($caseTraverseeAvecPiece == 0) non();
        if ($caseTraverseeAvecPiece == 1){
        
            include $BDD_3_E.'piecePriseEnPassant.php';
            if ($couleurAdversaire == $couleur) non();
            if ($pieceAdversaire != 'pion') non();
            if ($statutAdversaire == 'initial') non();
            if (preg_match("#^nIemeDeplacement[0-9]+$#", $statutAdversaire)) non();
            if (preg_match("#^premierDeplacement[0-9]+$#", $statutAdversaire)) {
                $tourDeJeuDePionAdversaire = 
                preg_replace('/premierDeplacement/', '', $statutAdversaire);
                if ((int)$tourDeJeuDePionAdversaire != $tourDeJeu -1) non();
            }
        }
        if ($aLeDroit == 1 && $caseDestinationAvecPiece == 0) priseEnPassant();
    }
}

// PROMOTION
if ($destinationO == 0 || $destinationO == 7) {
    if ($aLeDroit == 1) promotion($couleur);
}

?>