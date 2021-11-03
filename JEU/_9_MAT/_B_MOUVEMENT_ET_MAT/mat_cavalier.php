<?php

// 1
if ($echec == 1) {
    if ($origineA > 0 && $origineO > 1){
        $destinationA = $origineA - 1;
        $destinationO = $origineO - 2;
        include 'module/_A_Package.php';
    }
}
//=========================

// 2
if ($echec == 1) {
    if ($origineA > 1 && $origineO > 0){
        $destinationA = $origineA - 2;
        $destinationO = $origineO - 1;
        include 'module/_A_Package.php';
    }
}
//=========================

// 3
if ($echec == 1) {
    if ($origineA < 7 && $origineO < 6){
        $destinationA = $origineA + 1;
        $destinationO = $origineO + 2;
        include 'module/_A_Package.php';
    }
}
//=========================

// 4
if ($echec == 1) {
    if ($origineA < 6 && $origineO < 7){
        $destinationA = $origineA + 2;
        $destinationO = $origineO + 1;
        include 'module/_A_Package.php';
    }
}        
//=========================

// 5
if ($echec == 1) {
    if ($origineA > 0 && $origineO < 6){
        $destinationA = $origineA - 1;
        $destinationO = $origineO + 2;
        include 'module/_A_Package.php';
    }
}
//=========================

// 6
if ($echec == 1) {
    if ($origineA > 1 && $origineO < 7){
        $destinationA = $origineA - 2;
        $destinationO = $origineO + 1;
        include 'module/_A_Package.php';
    }
}
//=========================

// 7
if ($echec == 1) {
    if ($origineA < 7 && $origineO > 1){
        $destinationA = $origineA + 1;
        $destinationO = $origineO - 2;
        include 'module/_A_Package.php';
    }
}
//=========================

// 8
if ($echec == 1) {
    if ($origineA < 6 && $origineO > 0){
        $destinationA = $origineA + 2;
        $destinationO = $origineO - 1;
        include 'module/_A_Package.php';
    }
}
//=========================

?>