<?php
// MOUVEMENT BASIQUE

if (abs($origineA - $destinationA) > 2 
|| abs($origineO - $destinationO) > 2) non();

if (abs($origineA - $destinationA) == 2){
    if (abs($origineO - $destinationO) == 2 
    || abs($origineO - $destinationO) == 0) non();
}

if (abs($origineA - $destinationA) == 0) non();

if (abs($origineA - $destinationA) == 1 
&& abs($origineO - $destinationO) < 2) non();

?>