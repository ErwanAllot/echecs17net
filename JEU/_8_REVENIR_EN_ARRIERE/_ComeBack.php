<?php

    if (isset($_POST['reprendre'])) {coupRetire();}
    // J'arrête le temps quand un pion arrive à la promotion
    // Donc, c'est un peu compliqué de gérer le comeback du coup
    // Le temps, ce n'est pas évident à gérer.
 
    include $BDD_8_P.'maxId.php';
   
    if ($mouvement == 'deplacement' || $mouvement == 'capture')
        {include 'deplacementCapture.php';}

    if ($mouvement == 'petitRoque' || $mouvement == 'grandRoque')
        {include 'petitEtGrandRoque.php';}

    if ($mouvement == 'priseEnPassant')
        {include 'priseEnPassant.php';}
        
    if ($mouvement == 'promotion')
        {include 'promotion.php';}
    
?>