<?php

$couleur = '';
if ($tourDeJeu % 2 == 1){$couleur = 'Blanc';} else {$couleur = 'Noir';}
   
if (preg_match("#^d|D|t|T|c|C|f|F$#", $saisie)) {

    if ($couleur == 'Noir') {$ordonnee = 7;} else {$ordonnee = 0;}

    $pion = 'pion';
    $statut = 'Promu';
    $piece = '';

    switch ($saisie) {
        case ($saisie == 'd' || $saisie == 'D'):     $piece = 'dame';          break;
        case ($saisie == 't' || $saisie == 'T'):     $piece = 'tour';          break;
        case ($saisie == 'c' || $saisie == 'C'):     $piece = 'cavalier';      break;
        case ($saisie == 'f' || $saisie == 'F'):     $piece = 'fou';           break;
    }

    //SAUVEGARDE
    include 'JEU/_5_SAUVEGARDE/_Partie.php';
    include $BDD_6_E.'promotionConfirmee.php';
    include $BDD_6_S.'/temps.php';
    $checkMarkButton = '✔️';
}
else non(); promotion($couleur);
header("Refresh:0");
?>