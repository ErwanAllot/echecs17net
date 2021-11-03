<?php
// MOUVEMENT BASIQUE
if (abs($origineA - $destinationA) != abs($origineO - $destinationO)) non();

$voyageA = $origineA;
$voyageO = $origineO;
$nombrePiecesEntreFouEtDestination = 0;

if ($origineA < $destinationA){
    while($voyageO != $destinationO){
        $voyageA += 1;
        if ($origineO < $destinationO) {$voyageO += 1;}
        if ($origineO > $destinationO) {$voyageO -= 1;}
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        $nombrePiecesEntreFouEtDestination += $caseTraverseeAvecPiece;
    }
    if ($nombrePiecesEntreFouEtDestination > 1) non();
    if ($nombrePiecesEntreFouEtDestination == 1 
    && $caseDestinationAvecPiece == 0) non();
}

if ($origineA > $destinationA){
    while($voyageO != $destinationO){
        $voyageA -= 1;
        if ($origineO < $destinationO) {$voyageO += 1;}
        if ($origineO > $destinationO) {$voyageO -= 1;}
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        $nombrePiecesEntreFouEtDestination += $caseTraverseeAvecPiece;
    }
    if ($nombrePiecesEntreFouEtDestination > 1) non();
    if ($nombrePiecesEntreFouEtDestination == 1 
    && $caseDestinationAvecPiece == 0) non();
}

?>