<?php

$couleur = '';
if ($tourDeJeu % 2 == 1){$couleur = 'Blanc';} else {$couleur = 'Noir';}
   
$saisie = rand(0,3);

    if ($couleur == 'Noir') {$ordonnee = 7;} else {$ordonnee = 0;}

    $pion = 'pion';
    $statut = 'Promu';
    $piece = '';

    switch ($saisie) {
        case $saisie == 0 :     $piece = 'dame';          break;
        case $saisie == 1 :     $piece = 'tour';          break;
        case $saisie == 2 :     $piece = 'cavalier';      break;
        case $saisie == 3 :     $piece = 'fou';           break;
    }

    //SAUVEGARDE
    include 'JEU/_5_SAUVEGARDE/_Partie.php';
    include $BDD_6_E.'promotionConfirmee.php';
    include $BDD_6_S.'/temps.php';
    $checkMarkButton = '✔️';

    $stop = 1;
//else non(); promotion($couleur);

?>