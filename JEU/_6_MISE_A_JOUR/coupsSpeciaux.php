<?php
    switch ($piece) {

        case 'roi':  

            if ($roque == 1){
                $tourRoqueDestination = 8; //parce qu'il faut mettre un nombre
                if ($tourRoqueA == 7){$tourRoqueDestination = $origineA + 1;}
                if ($tourRoqueA == 0){$tourRoqueDestination = $origineA - 1;}
                $nouveauStatutTour = 'premierDeplacement' . (string)$tourDeJeu;
                include $BDD_6_E.'nouvelAbcisseStatutTourRoque.php';
            }

        break;

        case 'pion':  

            if ($priseEnPassant == 1){
                include $BDD_6_E.'effacementPriseEnPassant.php';
            }
            
        break;
    }
?>