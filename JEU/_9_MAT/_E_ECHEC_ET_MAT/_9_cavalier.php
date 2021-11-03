<?php

// On pourrait sûrement faire beaucoup mieux
// A refacto plus tard

// 1
if ($abcisseRoi > 0 && $ordonneeRoi > 1){
    $pieceAProximite = 0;
    $voyageA = $abcisseRoi - 1;
    $voyageO = $ordonneeRoi - 2;
    include $BDD_3_E.'caseTraverseeAvecPiece.php';
    $pieceAProximite = $caseTraverseeAvecPiece;
    if ($pieceAProximite == 1){
        $pieceQuiPeutMettreEchecA = $voyageA;
        $pieceQuiPeutMettreEchecO = $voyageO;
        include $BDD_7_E.'pieceQuiPeutMettreEchec.php';
        if ($couleurAdversaire != $couleurRoi && $pieceAdversaire == 'cavalier') 
        echecEtMat($couleurRoi, $couleur);
    }  
}

// 2
if ($abcisseRoi > 1 && $ordonneeRoi > 0){
    $pieceAProximite = 0;
    $voyageA = $abcisseRoi - 2;
    $voyageO = $ordonneeRoi - 1;
    include $BDD_3_E.'caseTraverseeAvecPiece.php';
    $pieceAProximite = $caseTraverseeAvecPiece;
    if ($pieceAProximite == 1){
        $pieceQuiPeutMettreEchecA = $voyageA;
        $pieceQuiPeutMettreEchecO = $voyageO;
        include $BDD_7_E.'pieceQuiPeutMettreEchec.php';
        if ($couleurAdversaire != $couleurRoi && $pieceAdversaire == 'cavalier') 
        echecEtMat($couleurRoi, $couleur);
    }  
}

// 3
if ($abcisseRoi < 7 && $ordonneeRoi < 6){
    $pieceAProximite = 0;
    $voyageA = $abcisseRoi + 1;
    $voyageO = $ordonneeRoi + 2;
    include $BDD_3_E.'caseTraverseeAvecPiece.php';
    $pieceAProximite = $caseTraverseeAvecPiece;
    if ($pieceAProximite == 1){
        $pieceQuiPeutMettreEchecA = $voyageA;
        $pieceQuiPeutMettreEchecO = $voyageO;
        include $BDD_7_E.'pieceQuiPeutMettreEchec.php';
        if ($couleurAdversaire != $couleurRoi && $pieceAdversaire == 'cavalier') 
        echecEtMat($couleurRoi, $couleur);
    }  
}

// 4
if ($abcisseRoi < 6 && $ordonneeRoi < 7){
    $pieceAProximite = 0;
    $voyageA = $abcisseRoi + 2;
    $voyageO = $ordonneeRoi + 1;
    include $BDD_3_E.'caseTraverseeAvecPiece.php';
    $pieceAProximite = $caseTraverseeAvecPiece;
    if ($pieceAProximite == 1){
        $pieceQuiPeutMettreEchecA = $voyageA;
        $pieceQuiPeutMettreEchecO = $voyageO;
        include $BDD_7_E.'pieceQuiPeutMettreEchec.php';
        if ($couleurAdversaire != $couleurRoi && $pieceAdversaire == 'cavalier') 
        echecEtMat($couleurRoi, $couleur);
    }  
}

// 5
if ($abcisseRoi > 0 && $ordonneeRoi < 6){
    $pieceAProximite = 0;
    $voyageA = $abcisseRoi - 1;
    $voyageO = $ordonneeRoi + 2;
    include $BDD_3_E.'caseTraverseeAvecPiece.php';
    $pieceAProximite = $caseTraverseeAvecPiece;
    if ($pieceAProximite == 1){
        $pieceQuiPeutMettreEchecA = $voyageA;
        $pieceQuiPeutMettreEchecO = $voyageO;
        include $BDD_7_E.'pieceQuiPeutMettreEchec.php';
        if ($couleurAdversaire != $couleurRoi && $pieceAdversaire == 'cavalier') 
        echecEtMat($couleurRoi, $couleur);
    }  
}

// 6
if ($abcisseRoi > 1 && $ordonneeRoi < 7){
    $pieceAProximite = 0;
    $voyageA = $abcisseRoi - 2;
    $voyageO = $ordonneeRoi + 1;
    include $BDD_3_E.'caseTraverseeAvecPiece.php';
    $pieceAProximite = $caseTraverseeAvecPiece;
    if ($pieceAProximite == 1){
        $pieceQuiPeutMettreEchecA = $voyageA;
        $pieceQuiPeutMettreEchecO = $voyageO;
        include $BDD_7_E.'pieceQuiPeutMettreEchec.php';
        if ($couleurAdversaire != $couleurRoi && $pieceAdversaire == 'cavalier') 
        echecEtMat($couleurRoi, $couleur);
    }  
}

// 7
if ($abcisseRoi < 7 && $ordonneeRoi > 1){
    $pieceAProximite = 0;
    $voyageA = $abcisseRoi + 1;
    $voyageO = $ordonneeRoi - 2;
    include $BDD_3_E.'caseTraverseeAvecPiece.php';
    $pieceAProximite = $caseTraverseeAvecPiece;
    if ($pieceAProximite == 1){
        $pieceQuiPeutMettreEchecA = $voyageA;
        $pieceQuiPeutMettreEchecO = $voyageO;
        include $BDD_7_E.'pieceQuiPeutMettreEchec.php';
        if ($couleurAdversaire != $couleurRoi && $pieceAdversaire == 'cavalier') 
        echecEtMat($couleurRoi, $couleur);
    }  
}

// 8
if ($abcisseRoi < 6 && $ordonneeRoi > 0){
    $pieceAProximite = 0;
    $voyageA = $abcisseRoi + 2;
    $voyageO = $ordonneeRoi - 1;
    include $BDD_3_E.'caseTraverseeAvecPiece.php';
    $pieceAProximite = $caseTraverseeAvecPiece;
    if ($pieceAProximite == 1){
        $pieceQuiPeutMettreEchecA = $voyageA;
        $pieceQuiPeutMettreEchecO = $voyageO;
        include $BDD_7_E.'pieceQuiPeutMettreEchec.php';
        if ($couleurAdversaire != $couleurRoi && $pieceAdversaire == 'cavalier') 
        echecEtMat($couleurRoi, $couleur);
    }  
}
?>