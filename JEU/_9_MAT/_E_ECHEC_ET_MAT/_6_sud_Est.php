<?php

if ($abcisseRoi < 7 && $ordonneeRoi < 7){

    $pieceAProximite = 0;
    $voyageA = $abcisseRoi;
    $voyageO = $ordonneeRoi;

    $sortieDeLaMap = 0;
    $sortieDeLaBoucle = 0;
    while ($sortieDeLaBoucle == 0 ){
        $voyageA += 1;
        $voyageO += 1;
        include $BDD_3_E.'caseTraverseeAvecPiece.php';
        $pieceAProximite = $caseTraverseeAvecPiece;

        if ($voyageA == 0 || $voyageO == 7) {$sortieDeLaMap = 1;}
        if ($pieceAProximite == 1 || $sortieDeLaMap == 1) {$sortieDeLaBoucle = 1;}
    }

    if ($pieceAProximite == 1){
        $pieceQuiPeutMettreEchecA = $voyageA;
        $pieceQuiPeutMettreEchecO = $voyageO;

        include $BDD_7_E.'pieceQuiPeutMettreEchec.php';

        if ($couleurAdversaire != $couleurRoi){
            if ($pieceAdversaire == 'fou' || $pieceAdversaire == 'dame') 
            echecEtMat($couleurRoi, $couleur);
            if ($pieceAdversaire == 'roi'){
                if ($pieceQuiPeutMettreEchecA == $abcisseRoi + 1 
                && $pieceQuiPeutMettreEchecO == $ordonneeRoi + 1) 
                echecEtMat($couleurRoi, $couleur);
            }    
        }
    }  
}

?>