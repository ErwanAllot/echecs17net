<?php

if ($pionPromu == 0){

    if ($caseDestinationAvecPiece == 0){
    
        if ($roque == 1) {
            if ($tourRoqueA == 7){$mouvement = 'petitRoque';}
            if ($tourRoqueA == 0){$mouvement = 'grandRoque';}
            include $BDD_5_P.'enregistrementRoque.php';
        }
        if ($priseEnPassant == 1) {
            include $BDD_5_P.'enregistrementPriseEnPassant.php';
        }
        if ($roque == 0 && $priseEnPassant == 0) {
            include $BDD_5_P.'enregistrementStandardSansPrise.php';
        }
    }
    
    if ($caseDestinationAvecPiece == 1){
        include $BDD_5_P.'enregistrementStandardAvecPrise.php';
    }
}

if ($pionPromu == 1){
    include $BDD_5_P.'enregistrementPromotion.php';
}

?>