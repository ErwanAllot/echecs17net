<?php

if ($abcisseRoi > 0 && $ordonneeRoi < 6){

    $pieceAProximite = 0;
    $voyageA = $abcisseRoi - 1;
    $voyageO = $ordonneeRoi + 1;

    include $BDD_3_E.'caseTraverseeAvecPiece.php';
    $pieceAProximite = $caseTraverseeAvecPiece;

    if ($pieceAProximite == 1){
        $pieceQuiPeutMettreEchecA = $voyageA;
        $pieceQuiPeutMettreEchecO = $voyageO;

        include $BDD_7_E.'pieceQuiPeutMettreEchec.php';

        if ($couleurAdversaire != $couleurRoi && $pieceAdversaire == 'pion') 
        echecEtMat($couleurRoi, $couleur);
    }  
}

if ($abcisseRoi < 7 && $ordonneeRoi < 5){

    $pieceAProximite = 0;
    $voyageA = $abcisseRoi + 1;
    $voyageO = $ordonneeRoi + 1;
    
    include $BDD_3_E.'caseTraverseeAvecPiece.php';
    $pieceAProximite = $caseTraverseeAvecPiece;

    if ($pieceAProximite == 1){
        $pieceQuiPeutMettreEchecA = $voyageA;
        $pieceQuiPeutMettreEchecO = $voyageO;

        include $BDD_7_E.'pieceQuiPeutMettreEchec.php';

        if ($couleurAdversaire != $couleurRoi && $pieceAdversaire == 'pion') 
        echecEtMat($couleurRoi, $couleur);
    }  
}

?>