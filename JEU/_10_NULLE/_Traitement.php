<?php

// nbTourSansPriseOuPionCapturee
$priseOuPionDeplace = 0;

include $BDD_8_P.'maxId.php';
if ($mouvement == 'priseEnPassant' || $mouvement == 'capture')
    {$priseOuPionDeplace = 1;}
if ($piece == 'pion'){$priseOuPionDeplace = 1;}

// configurationMap
$configurationMap = '';

$origineA = 0; $origineO = 0; $radar = 1; 

while($radar == 1){
    
    include $BDD_2_E.'caseOrigineAvecPiece.php'; 
    if ($caseOrigineAvecPiece == 1) {
        
        include $BDD_2_E.'pieceAJouer.php';
        
        ($couleur == 'Blanc')? $couleur = 'b' : $couleur = 'n';

        switch ($piece) {
            case 'tour':        $piece = 'T';   break;
            case 'cavalier':    $piece = 'C';   break;
            case 'fou':         $piece = 'F';   break;
            case 'dame':        $piece = 'D';   break;
            case 'roi':         $piece = 'R';   break;
            case 'pion':        $piece = 'P';   break;
        }

        $configurationMap .=  $piece . $couleur . $origineA . $origineO . ' ';   
    }
    
    if ($origineA == 7 && $origineO == 7){$radar = 0;}
    ($origineA < 7)? ++$origineA : $origineA = 0;
    ($origineA == 0)? ++$origineO : $origineO = $origineO;
}

//$nbTourSansPriseOuPionDeplace = 0; // obligé de le déclarer ???
if ($tourDeJeu == 1){
    $nbTourSansPriseOuPionDeplace = 0;
    if ($priseOuPionDeplace == 1) {$nbTourSansPriseOuPionDeplace = 0;}
    if ($priseOuPionDeplace == 0) {$nbTourSansPriseOuPionDeplace = 1;}
}
if ($tourDeJeu > 1){
    include $BDD_10_N.'lectureTmoinsUn.php';
    if ($priseOuPionDeplace == 1) {$nbTourSansPriseOuPionDeplace = 0;}
    if ($priseOuPionDeplace == 0) {
        $nbTourSansPriseOuPionDeplace += 1;
        if ($nbTourSansPriseOuPionDeplace == 75) coup75();
    }
}

// il me faudra une db spéciale joueurs/jeu pour savoir si la partie s'arrête ou pas
// ex ICI coup75() arrête la partie
// qu'est-ce qui prévaut entre mat et coup75() ??? 

include $BDD_10_N.'enregistrement.php'; 

if ($tourDeJeu > 4){
    include $BDD_10_N.'repeteCinqFois.php';
    if ($cinqFois == 5) repetition3x();
}

include $BDD_10_E.'nbrDePiecesTotal.php';
//$message .= $nbrDePieceTotal;

if ($nbrDePieceTotal == 2) impossibiliteDeMater();

if ($nbrDePieceTotal == 3){
    $piece = 'fou';
    include $BDD_10_E.'nbrDePiecesUntel.php';
    if ($nbrDePieceUntel == 1) impossibiliteDeMater();
} 

if ($nbrDePieceTotal == 3){
    $piece = 'cavalier';
    include $BDD_10_E.'nbrDePiecesUntel.php';
    if ($nbrDePieceUntel == 1) impossibiliteDeMater();
} 

if ($nbrDePieceTotal == 4){
    $piece = 'fou';
    include $BDD_10_E.'nbrDePiecesUntel.php';
    if ($nbrDePieceUntel == 2) {
        include $BDD_10_E.'nbrDeBlancs.php';
        if ($nbrDeBlancs == 1 || $nbrDeBlancs == 3) impossibiliteDeMater();
    }
}

/*
include $BDD_10_E.'nbrDePiecesUntel.php';
$message .= $nbrDePieceUntel;


include $BDD_10_E.'nbrDeBlancs.php';
$message .= $nbrDeBlancs;
*/

/*
roi contre roi,
roi et fou contre roi,
roi et cavalier contre roi,
roi et fou contre roi et fou de même couleur,

impossibiliteDeMater();
*/



/*
if ($tourDeJeu > 4){
    $repetition3x = 0;

    $ligneAInspectee = $tourDeJeu;
    include $BDD_10_N.'lectureMap.php';
    $temps0 = $lectureMap; 

    $ligneAInspectee = $tourDeJeu - 1;
    include $BDD_10_N.'lectureMap.php';
    $temps1 = $lectureMap; 
    
    $ligneAInspectee = $tourDeJeu - 2;
    include $BDD_10_N.'lectureMap.php';
    $temps2 = $lectureMap; 

    $ligneAInspectee = $tourDeJeu - 3;
    include $BDD_10_N.'lectureMap.php';
    $temps3 = $lectureMap; 

    $ligneAInspectee = $tourDeJeu - 4;
    include $BDD_10_N.'lectureMap.php';
    $temps4 = $lectureMap; 
    
    if ($temps0 == $temps2){
        if ($temps4 == $temps2 && $temps3 == $temps1) repetition3x();
    }
    
    //$message .= '</br></br>' .$configurationMap. '</br></br>' .$temps1.  '</br></br>' .$temps2.  '</br></br>' .$temps3.  '</br></br>' .$temps4;
}
*/




?>