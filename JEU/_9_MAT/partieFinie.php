<?php

reInitialisation();

// VARIABLES==============================================================

$origineA = 0; $origineO = 0;
$onResteDansLaBoucle = 1; $radar = 1; 

// PREMIERE BOUCLE========================================================
while($onResteDansLaBoucle == 1){
    reInitialisation();
    include '_A_VERIFICATION_ET_MAT/_Coup.php';

        if ($aLeDroit == 1){
            $echec = 1;
            include '_B_MOUVEMENT_ET_MAT/_Menu_piece.php';
        }
    
    if ($origineA == 7 && $origineO == 7){$radar = 0;}
    if ($echec == 0 || $radar == 0){$onResteDansLaBoucle = 0;}

    ($origineA < 7)? ++$origineA : $origineA = 0;
    ($origineA == 0)? ++$origineO : $origineO = $origineO;
}


?>