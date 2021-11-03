<?php
    $checkMarkButton = '✔️';

    // EFFACEMENT ET MISE A JOUR
    if ($caseDestinationAvecPiece == 1){
        include $BDD_6_E.'effacementPiece.php';
    }
    
    if ($priseEnPassant == 1){
        include $BDD_6_E.'effacementPriseEnPassant.php';
    }

    include $BDD_6_E.'nouvellesCoordonneesPiece.php';
    
    include 'statutDefinition.php';  
    include $BDD_6_E.'nouveauStatutPiece.php';

    
?>