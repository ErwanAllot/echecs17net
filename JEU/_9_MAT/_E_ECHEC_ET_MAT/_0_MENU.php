<?php

// lignes ET colonnes => roi / dame / tour
include '_1_ouest.php';
if ($aLeDroit == 1) {include '_2_est.php';}
if ($aLeDroit == 1) {include '_3_nord.php';}
if ($aLeDroit == 1) {include '_4_sud.php';}

// diagonales => roi / dame / fou
if ($aLeDroit == 1) {include '_5_nord_Ouest.php';}
if ($aLeDroit == 1) {include '_6_sud_Est.php';}
if ($aLeDroit == 1) {include '_7_nord_Est.php';}
if ($aLeDroit == 1) {include '_8_sud_Ouest.php';}

// => cavalier
if ($aLeDroit == 1) {include '_9_cavalier.php';}

// => pions
if ($aLeDroit == 1 && $couleurRoi == 'Blanc') {include '_10_pionNoir.php';}
if ($aLeDroit == 1 && $couleurRoi == 'Noir') {include '_11_pionBlanc.php';}

?>