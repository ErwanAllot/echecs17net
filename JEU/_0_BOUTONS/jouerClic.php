<?php


    $checkMarkButton = '❌';

    include $BDD_4_E.'promotion.php';

    //structure de base
    if ($pionPromu == 0 && $saisie != ''){
        include 'JEU/_2_PREMIERE_VERIFICATION/_Coup2.php';
        if ($aLeDroit == 1){include 'JEU/_3_MOUVEMENT/_Piece.php';}
        if ($aLeDroit == 1){
            include 'JEU/_5_SAUVEGARDE/_Partie.php';
            include 'JEU/_6_MISE_A_JOUR/_ModificationBDD.php';
            include 'JEU/_7_LES_ECHECS/__Echec.php';
                // faudra bien s'assurer que tout fonctionne bien ici
                if ($echec == 0 && $aLeDroit == 1) {include 'JEU/_9_MAT/_Pat.php';}
                if ($echec == 1) {include 'JEU/_9_MAT/_Mat.php';}
        }
    }
    
    //structure promotion
    if ($pionPromu == 1){include 'JEU/_4_SPECIAL/_Promotion.php';}

?>