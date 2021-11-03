<?php
    $checkMarkButton = '✔️';

    // EFFACEMENT ET MISE A JOUR
    if ($caseDestinationAvecPiece == 1){
        include $BDD_6_E.'effacementPiece.php';
    }
    
    include 'coupsSpeciaux.php';

    include $BDD_6_E.'nouvellesCoordonneesPiece.php';
    
    include 'statutDefinition.php';  
    include $BDD_6_E.'nouveauStatutPiece.php';

    if ($promotion == 0){include $BDD_6_S.'/temps.php';}
    
?>