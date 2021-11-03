<?php

//======CONTRÔLE DE SON CAMP=============================================

$couleurRoi = $couleur; 
include $BDD_7_E.'positionRoi.php';
include '_0_MENU.php';

if ($roque == 1){

    if ($aLeDroit == 1){
        if ($tourRoqueA == 7){$abcisseRoi -= 1;}
        if ($tourRoqueA == 0){$abcisseRoi += 1;}
        include '_0_MENU.php';
    }

    if ($aLeDroit == 1){
        if ($tourRoqueA == 7){$abcisseRoi -= 1;}
        if ($tourRoqueA == 0){$abcisseRoi += 1;}
        include '_0_MENU.php';
    }
}

if ($aLeDroit == 0) {include 'JEU/_8_REVENIR_EN_ARRIERE/_ComeBack.php';}


//==== 
//je dois gérer ici l'enregistrement des coups dans 10_Nulle
// traiter échec mat et pat
// puis vérifier la db nulle pour le nulle
if ($aLeDroit == 1) {
    $stop = 1;
    $z = $couleur; // gros bricolage
    include 'JEU/_10_NULLE/_Traitement.php';
    $couleur = $z; // gros bricolage
}

//======CONTRÔLE DU CAMP ADVERSE==========================================

if ($aLeDroit == 1) {

    $autreCouleur = '';
    if ($couleur == 'Blanc') {$autreCouleur = 'Noir';}
    if ($couleur == 'Noir') {$autreCouleur = 'Blanc';}

    $couleurRoi = $autreCouleur; 
    
    include $BDD_7_E.'positionRoi.php';
    include '_0_MENU.php';
}

?>