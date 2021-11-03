<?php
// MOUVEMENT BASIQUE
if ($origineA != $destinationA && $origineO != $destinationO) non();

$voyageA = $origineA;
$voyageO = $origineO;
$nombrePiecesEntreTourEtDestination = 0;

if ($origineA == $destinationA){
    while($voyageO != $destinationO){
        if ($origineO < $destinationO) {$voyageO += 1;}
        if ($origineO > $destinationO) {$voyageO -= 1;}
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        $nombrePiecesEntreTourEtDestination += $caseTraverseeAvecPiece;
    }
    if ($nombrePiecesEntreTourEtDestination > 1) non();
    if ($nombrePiecesEntreTourEtDestination == 1 
    && $caseDestinationAvecPiece == 0) non();
}

if ($origineO == $destinationO){
    while($voyageA != $destinationA){
        if ($origineA < $destinationA) {$voyageA += 1;}
        if ($origineA > $destinationA) {$voyageA -= 1;}
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        $nombrePiecesEntreTourEtDestination += $caseTraverseeAvecPiece;
    }
    if ($nombrePiecesEntreTourEtDestination > 1) non();
    if ($nombrePiecesEntreTourEtDestination == 1 
    && $caseDestinationAvecPiece == 0) non();
}

?>