<?php
    if (preg_match("#^[a-hA-H][1-8][a-hA-H][1-8]$#", $saisie)) oui();
    else ecrire();

    if ($aLeDroit == 1){    // CALCUL des COORDONNEES 
        if (ord($saisie[0]) < 80){$origineA = ord($saisie[0]) - 65;}
        else {$origineA = ord($saisie[0]) - 97;}

        if (ord($saisie[2]) < 80){$destinationA = ord($saisie[2]) - 65;}
        else {$destinationA = ord($saisie[2]) - 97;}

        $origineO = 8 - $saisie[1];
        $destinationO = 8 - $saisie[3];
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