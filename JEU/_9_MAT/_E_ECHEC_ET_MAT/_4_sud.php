<?php

if ($ordonneeRoi < 7){

    $pieceAProximite = 0;
    $voyageA = $abcisseRoi;
    $voyageO = $ordonneeRoi;

    $sortieDeLaBoucle = 0;
    while ($sortieDeLaBoucle == 0 ){
        $voyageO += 1;
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        $pieceAProximite = $caseTraverseeAvecPiece;
        if ($pieceAProximite == 1 || $voyageO == 7) {$sortieDeLaBoucle = 1;}
    }

    if ($pieceAProximite == 1){
        $pieceQuiPeutMettreEchecA = $abcisseRoi;
        $pieceQuiPeutMettreEchecO = $voyageO;

        include $BDD_7_E.'pieceQuiPeutMettreEchec.php';

        if ($couleurAdversaire != $couleurRoi){
            if ($pieceAdversaire == 'tour' || $pieceAdversaire == 'dame') 
            echecEtMat($couleurRoi, $couleur);
            if ($pieceAdversaire == 'roi' 
            && $pieceQuiPeutMettreEchecO == $ordonneeRoi + 1) 
            echecEtMat($couleurRoi, $couleur);
        }
    }  
}


?>