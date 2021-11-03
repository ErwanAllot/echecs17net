<?php

    if ($caseDestinationAvecPiece == 0){
    
        if ($priseEnPassant == 1) {
            include $BDD_5_P.'enregistrementPriseEnPassant.php';
        }
        if ($priseEnPassant == 0) {
            include $BDD_5_P.'enregistrementStandardSansPrise.php';
        }
    }
    
    if ($caseDestinationAvecPiece == 1){
        include $BDD_5_P.'enregistrementStandardAvecPrise.php';
    }

?>