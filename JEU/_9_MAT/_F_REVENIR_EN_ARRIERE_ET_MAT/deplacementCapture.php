<?php

    $destinationA = $abcisseAdv;
    $destinationO = $ordonneeAdv;
    include $BDD_6_E.'effacementPiece.php';
    

    include $BDD_8_E.'reinsertion.php';


    if ($mouvement == 'capture'){
        
    
        $couleurAdv = '';
        if ($couleur == 'Blanc') {$couleurAdv = 'Noir';}
        if ($couleur == 'Noir') {$couleurAdv = 'Blanc';}
 
        // attention, ICI, on a créé une autre REQUETE
        // on aurait dû faire celle-ci dès le départ
        // sinon, on change toutes les valeurs !!!
        // donc, à rectifier pour le refacto !!!
        include $BDD_9_E.'reinsertion.php';
    }

    //include $BDD_8_S.'sablierRetourne.php';
    include $BDD_8_P.'histoireEffacee.php';
    
?>