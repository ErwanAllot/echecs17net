<?php
if ($aLeDroit == 1){
    include $BDD_2_E.'caseDestinationAvecPiece.php'; 
    if ($caseDestinationAvecPiece == 1){
        include $BDD_2_E.'pieceAManger.php';
        if ($couleurAdversaire == $autreCouleur) interdit();
    }
}
?>