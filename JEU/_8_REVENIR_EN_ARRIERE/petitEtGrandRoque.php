<?php
    
    
    $destinationA = '';
    $destinationO = $ordonnee;

    if ($mouvement == 'petitRoque'){$destinationA = 5;}
    if ($mouvement == 'grandRoque'){$destinationA = 2;}
    include $BDD_6_E.'effacementPiece.php';
    
    if ($mouvement == 'petitRoque'){$destinationA = 6;}
    if ($mouvement == 'grandRoque'){$destinationA = 3;}
    include $BDD_6_E.'effacementPiece.php';
    


    include $BDD_8_E.'reinsertion.php';

    $piece = $pieceAdv;
    $statut = $statutAdv;
    $abcisse = $abcisseAdv;
    $ordonnee = $ordonneeAdv;
    include $BDD_8_E.'reinsertion.php';


    include $BDD_8_S.'sablierRetourne.php';

    include $BDD_8_P.'histoireEffacee.php';

?>