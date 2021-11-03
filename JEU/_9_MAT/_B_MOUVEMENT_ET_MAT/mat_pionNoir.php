<?php

// MANGER AU SUD-OUEST
if ($echec == 1) {
    if ($origineA > 0){
        $destinationA = $origineA - 1;
        $destinationO = $origineO + 1;
        include 'module/_B_PackagePionQuiMange.php';
    }
}
//=========================

// MANGER AU SUD-EST
if ($echec == 1) {
    if ($origineA < 7){
        $destinationA = $origineA + 1;
        $destinationO = $origineO + 1;
        include 'module/_B_PackagePionQuiMange.php';
    }
}
//=========================

// SE DEPLACER D'UNE CASE
if ($echec == 1) {
    
        $destinationA = $origineA;
        $destinationO = $origineO + 1;
        include 'module/_C_PackagePionQuiAvance.php';
    
}
//=========================

// SE DEPLACER DE DEUX CASES
if ($echec == 1) {
    if ($origineO == 1){
        $destinationA = $origineA;
        $destinationO = $origineO + 2;
        include 'module/_C_PackagePionQuiAvance.php';
    }
}
//=========================

?>