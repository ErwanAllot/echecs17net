<?php

if ($abcisseRoi < 7){

    $pieceAProximite = 0;
    $voyageA = $abcisseRoi;
    $voyageO = $ordonneeRoi;

    $sortieDeLaBoucle = 0;
    while ($sortieDeLaBoucle == 0 ){
        $voyageA += 1;
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        $pieceAProximite = $caseTraverseeAvecPiece;
        if ($pieceAProximite == 1 || $voyageA == 7) {$sortieDeLaBoucle = 1;}
    }

    if ($pieceAProximite == 1){
        $pieceQuiPeutMettreEchecA = $voyageA;
        $pieceQuiPeutMettreEchecO = $ordonneeRoi;

        include $BDD_7_E.'pieceQuiPeutMettreEchec.php';

        if ($couleurAdversaire != $couleurRoi){
            if ($pieceAdversaire == 'tour' || $pieceAdversaire == 'dame') 
            echecEtMat($couleurRoi, $couleur);
            if ($pieceAdversaire == 'roi' 
            && $pieceQuiPeutMettreEchecA == $abcisseRoi + 1) 
            echecEtMat($couleurRoi, $couleur);
        }
    }  
}


?>