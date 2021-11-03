<?php

// pourquoi il n'y a pas besoin de préciser ICI le form action ????
$formD = "<form action  method = 'post'>";
$formF = "'></button></form>";

$carreNoir = "<button id = 'carre' class = 'noir' name = '";
$carreBlanc = "<button id = 'carre' name = '";


for ($i=0; $i<8; $i++) {
    for ($y=0; $y<8; $y++) {
        if ($i % 2 == 0){
            if ($y % 2 == 0){$tab[$i][$y] = $formD . $carreBlanc . $y.$i . $formF;}
            if ($y % 2 == 1){$tab[$i][$y] = $formD . $carreNoir . $y.$i . $formF;}
        }
        if ($i % 2 == 1){
            if ($y % 2 == 0){$tab[$i][$y] = $formD . $carreNoir . $y.$i . $formF;}
            if ($y % 2 == 1){$tab[$i][$y] = $formD . $carreBlanc . $y.$i . $formF;}
        }
    }
}

//====//===='$webSitePage' 'index.php'



/* SACRE BUG
$carreNoir = "<div id = 'carre' class = 'noir' >";
$carreBlanc = "<div id = 'carre' >";

$button = "<form action = 'index.php' method = 'post'><button name = '";
$formF = "'></button></form></div>";

for ($i=0; $i<8; $i++) {
    for ($y=0; $y<8; $y++) {
        if ($i % 2 == 0){
            if ($y % 2 == 0){$tab[$i][$y] = $carreBlanc . $button . $i.$y . $formF;}
            if ($y % 2 == 1){$tab[$i][$y] = $carreNoir . $button . $i.$y . $formF;}
        }
        if ($i % 2 == 1){
            if ($y % 2 == 0){$tab[$i][$y] = $carreBlanc  . $button . $i.$y . $formF;}
            if ($y % 2 == 1){$tab[$i][$y] = $carreNoir . $button . $i.$y . $formF;}
        }
    }
}

*/

?>