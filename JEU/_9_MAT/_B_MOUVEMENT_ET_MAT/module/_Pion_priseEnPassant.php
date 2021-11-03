<?php

// MOUVEMENTS DE PRISES
  
    if ($caseDestinationAvecPiece == 0) {
                
        $voyageA = $destinationA;
        $voyageO = $origineO;
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        if ($caseTraverseeAvecPiece == 0) interdit();
        if ($caseTraverseeAvecPiece == 1){
        
            include $BDD_3_E.'piecePriseEnPassant.php';
            if ($couleurAdversaire == $autreCouleur) interdit();
            if ($pieceAdversaire != 'pion') interdit();
            if ($statutAdversaire == 'initial') interdit();
            if (preg_match("#^nIemeDeplacement[0-9]+$#", $statutAdversaire)) interdit();
            if (preg_match("#^premierDeplacement[0-9]+$#", $statutAdversaire)) {
                $tourDeJeuDePionAdversaire = 
                preg_replace('/premierDeplacement/', '', $statutAdversaire);
                if ((int)$tourDeJeuDePionAdversaire != $tourDeJeu) interdit();
                // je viens de modifier tourDeJeu ICI
            }
        }
        if ($aLeDroit == 1) {$priseEnPassant = 1;};
    }


?>