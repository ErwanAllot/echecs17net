<?php

    $destinationA = $abcisseAdv;
    $destinationO = $ordonnee;
    //tout ça pour éviter une seconde colonne en base SQL===========
    $delta = 0; 
    if ($couleur == 'Blanc') {$delta = -1;}
    if ($delta == 0) {$delta = 1;}
    $destinationO += $delta;
    //tout ça pour éviter une seconde colonne en base SQL===========
    include $BDD_6_E.'effacementPiece.php';
    
    
    include $BDD_8_E.'reinsertion.php';

    // en fait, c'était pour éviter une seconde requete sql plutôt !!!
    $couleurAdv = '';
    if ($couleur == 'Blanc') {$couleurAdv = 'Noir';}
    if ($couleur == 'Noir') {$couleurAdv = 'Blanc';}

    include $BDD_9_E.'reinsertion.php';   

    //include $BDD_8_S.'sablierRetourne.php';
    include $BDD_8_P.'histoireEffacee.php';


?>