<?php
    oui();
    

    if ($aLeDroit == 1){    // CALCUL des COORDONNEES 
        $origineA = rand(0,7);

        $destinationA = rand(0,7);

        $origineO = rand(0,7);
        $destinationO = rand(0,7);

      //  echo $origineA . $origineO . '==' . $origineO .  $destinationO ;
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