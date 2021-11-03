<?php

    include $BDD_8_P.'maxId.php';
   
    if ($mouvement == 'deplacement' || $mouvement == 'capture')
        {include 'deplacementCapture.php';}

    if ($mouvement == 'priseEnPassant')
        {include 'priseEnPassant.php';}
        
?>