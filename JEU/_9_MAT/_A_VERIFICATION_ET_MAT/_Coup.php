<?php
    // Validation        
    include $BDD_2_E.'caseOrigineAvecPiece.php'; 
    if ($caseOrigineAvecPiece == 0) interdit();

    if ($aLeDroit == 1){
        include $BDD_2_E.'pieceAJouer.php'; 
        if ($couleur != $autreCouleur) interdit();   
    }

?>