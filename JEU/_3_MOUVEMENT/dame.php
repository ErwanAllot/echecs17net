<?php
if (abs($origineA - $destinationA) != abs($origineO - $destinationO)){
    if ($origineA != $destinationA && $origineO != $destinationO) non();
}

$voyageA = $origineA;
$voyageO = $origineO;
$nombrePiecesEntreDameEtDestination = 0;

if ($origineA == $destinationA){
    while($voyageO != $destinationO){
        if ($origineO < $destinationO) {$voyageO += 1;}
        if ($origineO > $destinationO) {$voyageO -= 1;}
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        $nombrePiecesEntreDameEtDestination += $caseTraverseeAvecPiece;
    }
    if ($nombrePiecesEntreDameEtDestination > 1) non();
    if ($nombrePiecesEntreDameEtDestination == 1 
    && $caseDestinationAvecPiece == 0) non();
}

if ($origineO == $destinationO){
    while($voyageA != $destinationA){
        if ($origineA < $destinationA) {$voyageA += 1;}
        if ($origineA > $destinationA) {$voyageA -= 1;}
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        $nombrePiecesEntreDameEtDestination += $caseTraverseeAvecPiece;
    }
    if ($nombrePiecesEntreDameEtDestination > 1) non();
    if ($nombrePiecesEntreDameEtDestination == 1 
    && $caseDestinationAvecPiece == 0) non();
}

if ($origineA < $destinationA){
    while($voyageO != $destinationO){
        $voyageA += 1;
        if ($origineO < $destinationO) {$voyageO += 1;}
        if ($origineO > $destinationO) {$voyageO -= 1;}
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        $nombrePiecesEntreDameEtDestination += $caseTraverseeAvecPiece;
    }
    if ($nombrePiecesEntreDameEtDestination > 1) non();
    if ($nombrePiecesEntreDameEtDestination == 1 
    && $caseDestinationAvecPiece == 0) non();
}

if ($origineA > $destinationA){
    while($voyageO != $destinationO){
        $voyageA -= 1;
        if ($origineO < $destinationO) {$voyageO += 1;}
        if ($origineO > $destinationO) {$voyageO -= 1;}
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        $nombrePiecesEntreDameEtDestination += $caseTraverseeAvecPiece;
    }
    if ($nombrePiecesEntreDameEtDestination > 1) non();
    if ($nombrePiecesEntreDameEtDestination == 1 
    && $caseDestinationAvecPiece == 0) non();
}

?>