<?php

// OUEST
if ($echec == 1) {
    if ($origineA > 0){
        $destinationA = $origineA - 1;
        $destinationO = $origineO;
        include 'module/_A_Package.php';
    }
}
//=========================

// EST
if ($echec == 1) {
    if ($origineA < 7){
        $destinationA = $origineA + 1;
        $destinationO = $origineO;
        include 'module/_A_Package.php';
    }
}
//=========================

// NORD
if ($echec == 1) {
    if ($origineO > 0){
        $destinationA = $origineA;
        $destinationO = $origineO - 1;
        include 'module/_A_Package.php';
    }
}
//=========================

// SUD
if ($echec == 1) {
    if ($origineO < 7){
        $destinationA = $origineA;
        $destinationO = $origineO + 1;
        include 'module/_A_Package.php';
    }
}        
//=========================

// NORD-OUEST
if ($echec == 1) {
    if ($origineA > 0 && $origineO > 0){
        $destinationA = $origineA - 1;
        $destinationO = $origineO - 1;
        include 'module/_A_Package.php';
    }
}
//=========================

// SUD-EST
if ($echec == 1) {
    if ($origineA < 7 && $origineO < 7){
        $destinationA = $origineA + 1;
        $destinationO = $origineO + 1;
        include 'module/_A_Package.php';
    }
}
//=========================

// NORD-EST
if ($echec == 1) {
    if ($origineA > 0 && $origineO < 7){
        $destinationA = $origineA - 1;
        $destinationO = $origineO + 1;
        include 'module/_A_Package.php';
    }
}
//=========================

// SUD-OUEST
if ($echec == 1) {
    if ($origineA < 7 && $origineO > 0){
        $destinationA = $origineA + 1;
        $destinationO = $origineO - 1;
        include 'module/_A_Package.php';
    }
}
//=========================

?>