<?php
    oui();
    

    if ($aLeDroit == 1){    // CALCUL des COORDONNEES 
        $origineA = $saisie[0];

        $destinationA = $saisie[2];

        $origineO = $saisie[1];
        $destinationO = $saisie[3];
    }

    // Validation        
    if ($aLeDroit == 1){
        include $BDD_2_E.'caseOrigineAvecPiece.php'; 
        if ($caseOrigineAvecPiece == 0) vide();
    }
    if ($aLeDroit == 1){
        include $BDD_2_E.'pieceAJouer.php'; 
        if ($tourDeJeu % 2 == 1 && $couleur != 'Blanc') tricheur();   
        if ($tourDeJeu % 2 == 0 && $couleur != 'Noir') tricheur();
    }
    if ($aLeDroit == 1){
        include $BDD_2_E.'caseDestinationAvecPiece.php'; 
        if ($caseDestinationAvecPiece == 1){
            include $BDD_2_E.'pieceAManger.php';
            if ($couleurAdversaire == $couleur) cannibale();
        }
    }
?>