<?php

if ($aLeDroit == 1){
    if ($caseDestinationAvecPiece == 1) interdit();
    else if (abs($origineO - $destinationO) == 2){
        $voyageA = $origineA;
        $voyageO = ($origineO + $destinationO) / 2;
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        if ($caseTraverseeAvecPiece == 1) interdit();
    }
}

?>