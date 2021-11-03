<?php

// NORD-OUEST
if ($echec == 1) {
    if ($origineA > 0 && $origineO > 0){
        $destinationA = $origineA - 1;
        $destinationO = $origineO - 1;
        include 'module/_1_Entrees.php';
        while ($sortieBoucle == 0){
            include 'module/_A_Package.php';
            if ($destinationA == 0 || $destinationO == 0){$sortieDeLaMap = 1;}
            $destinationA -= 1; $destinationO -= 1;
            include 'module/_1_Sorties.php';
        }
    }
}
//=========================

// SUD-EST
if ($echec == 1) {
    if ($origineA < 7 && $origineO < 7){
        $destinationA = $origineA + 1;
        $destinationO = $origineO + 1;
        include 'module/_1_Entrees.php';
        while ($sortieBoucle == 0){
            include 'module/_A_Package.php';
            if ($destinationA == 7 || $destinationO == 7){$sortieDeLaMap = 1;}
            $destinationA += 1; $destinationO += 1;
            include 'module/_1_Sorties.php';
        }
    }
}
//=========================

// NORD-EST
if ($echec == 1) {
    if ($origineA > 0 && $origineO < 7){
        $destinationA = $origineA - 1;
        $destinationO = $origineO + 1;
        include 'module/_1_Entrees.php';
        while ($sortieBoucle == 0){
            include 'module/_A_Package.php';
            if ($destinationA == 0 || $destinationO == 7){$sortieDeLaMap = 1;}
            $destinationA -= 1; $destinationO += 1;
            include 'module/_1_Sorties.php';
        }
    }
}
//=========================

// SUD-OUEST
if ($echec == 1) {
    if ($origineA < 7 && $origineO > 0){
        $destinationA = $origineA + 1;
        $destinationO = $origineO - 1;
        include 'module/_1_Entrees.php';
        while ($sortieBoucle == 0){
            include 'module/_A_Package.php';
            if ($destinationA == 7 || $destinationO == 0){$sortieDeLaMap = 1;}
            $destinationA += 1; $destinationO -= 1;
            include 'module/_1_Sorties.php';
        }
    }
}
//=========================

?>