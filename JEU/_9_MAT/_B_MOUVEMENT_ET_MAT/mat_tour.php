<?php

// OUEST
if ($echec == 1) {
    if ($origineA > 0){
        $destinationA = $origineA - 1;
        $destinationO = $origineO;
        include 'module/_1_Entrees.php';
        while ($sortieBoucle == 0){
            include 'module/_A_Package.php';
            if ($destinationA == 0){$sortieDeLaMap = 1;}
            $destinationA -= 1;
            include 'module/_1_Sorties.php';
        }
    }
}
//=========================

// EST
if ($echec == 1) {
    if ($origineA < 7){
        $destinationA = $origineA + 1;
        $destinationO = $origineO;
        include 'module/_1_Entrees.php';
        while ($sortieBoucle == 0){
            include 'module/_A_Package.php';
            if ($destinationA == 7){$sortieDeLaMap = 1;}
            $destinationA += 1;
            include 'module/_1_Sorties.php';
        }
    }
}
//=========================

// NORD
if ($echec == 1) {
    if ($origineO > 0){
        $destinationA = $origineA;
        $destinationO = $origineO - 1;
        include 'module/_1_Entrees.php';
        while ($sortieBoucle == 0){
            include 'module/_A_Package.php';
            if ($destinationO == 0){$sortieDeLaMap = 1;}
            $destinationO -= 1;
            include 'module/_1_Sorties.php';
        }
    }
}
//=========================

// SUD
if ($echec == 1) {
    if ($origineO < 7){
        $destinationA = $origineA;
        $destinationO = $origineO + 1;
        include 'module/_1_Entrees.php';
        while ($sortieBoucle == 0){
            include 'module/_A_Package.php';
            if ($destinationO == 7){$sortieDeLaMap = 1;}
            $destinationO += 1;
            include 'module/_1_Sorties.php';
        }
    }
}
//=========================

?>