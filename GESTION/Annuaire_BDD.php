<?php

//==== PARTIE INTERRESSANTE POUR PERMETTRE PLUSIEURS PARTIES EN MÊME TEMPS
$table_Echiquier = 'chess_echiquier';
$table_Sablier = 'chess_sablier';
$table_Partie = 'chess_partie';
$table_Nulle = 'chess_nulle';
$table_joueur = 'chess_joueur';
//=====================

$BDD = 'BDD/';
// LES BASES DE DONNEES
$Echiquier =    'Echiquier/';
$Sablier =      'Sablier/';
$Partie =       'Partie/';
$Nulle =        'Nulle/';
$Joueur =       'Joueur/';

// L'ORGANISATION
$connexion =       '_11_CONNEXION/';

$initialisation =       '_0_INITIALISATION/';
$affichage =            '_1_AFFICHAGE/';
$premiereVerification = '_2_PREMIERE_VERIFICATION/';
$mouvement =            '_3_MOUVEMENT/';
$special =              '_4_SPECIAL/';
$sauvegarde =           '_5_SAUVEGARDE/';
$miseAJour =            '_6_MISE_A_JOUR/';
$lesEchecs =            '_7_LES_ECHECS/';
$revenirEnArriere =     '_8_REVENIR_EN_ARRIERE/';
$analyseMat =           '_9_MAT/';
$analyseNulle =         '_10_NULLE/';


// LES DIFFERENTS DOSSIERS SQL


$BDD_11_J = $BDD . $connexion . $Joueur;

$BDD_0_E = $BDD . $initialisation . $Echiquier;
$BDD_0_S = $BDD . $initialisation . $Sablier;
$BDD_0_P = $BDD . $initialisation . $Partie;
$BDD_0_N = $BDD . $initialisation . $Nulle;

$BDD_1_E = $BDD . $affichage . $Echiquier;
$BDD_1_S = $BDD . $affichage . $Sablier;

$BDD_2_E = $BDD . $premiereVerification . $Echiquier;

$BDD_3_E = $BDD . $mouvement . $Echiquier;

$BDD_4_E = $BDD . $special . $Echiquier;

$BDD_5_P = $BDD . $sauvegarde . $Partie;

$BDD_6_E = $BDD . $miseAJour . $Echiquier;
$BDD_6_S = $BDD . $miseAJour . $Sablier;

$BDD_7_E = $BDD . $lesEchecs . $Echiquier;

$BDD_8_E = $BDD . $revenirEnArriere . $Echiquier;
$BDD_8_S = $BDD . $revenirEnArriere . $Sablier;
$BDD_8_P = $BDD . $revenirEnArriere . $Partie;

$BDD_9_E = $BDD . $analyseMat . $Echiquier;

$BDD_10_E = $BDD . $analyseNulle . $Echiquier;
$BDD_10_N = $BDD . $analyseNulle . $Nulle;


/*
ALTER TABLE
DELETE FROM
INSERT INTO
SELECT FROM
(SELECT) COUNT FROM
UPDATE SET
*/


?>