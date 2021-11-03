<?php


    //je traite ça au début parce que je change $piece
    $casParticulier = 0;
    if ($piece == 'pion'){
        if ($ordonneeAdv == 0 || $ordonneeAdv == 7) {$casParticulier = 1;}
    }

    
    $destinationA = $abcisseAdv;
    $destinationO = $ordonneeAdv;
    include $BDD_6_E.'effacementPiece.php';
    

    include $BDD_8_E.'reinsertion.php';


    if ($mouvement == 'capture'){
        
    
        $couleurNoir = '';
        if ($couleur == 'Blanc') {$couleurNoir = 'Noir';}
        if ($couleurNoir == 'Noir') {$couleur = 'Noir';}
        else {$couleur = 'Blanc';}


        $piece = $pieceAdv;
        $statut = $statutAdv;
        $abcisse = $abcisseAdv;
        $ordonnee = $ordonneeAdv;
        include $BDD_8_E.'reinsertion.php';
    }


    if ($casParticulier == 0){
        include $BDD_8_S.'sablierRetourne.php';
    }
    
    include $BDD_8_P.'histoireEffacee.php';
    
?>