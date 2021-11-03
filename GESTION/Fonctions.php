<?php

//===== _0_INITIALISATION/ ============================

function initialisationDesVariables() {
    global $finDePartie;            $finDePartie = 0;
    global $stop;                   $stop = 0;
    global $mat;                    $mat = 0;
    global $echec;                  $echec = 0;
    global $promotion;              $promotion = 0;
    global $roque;                  $roque = 0;
    global $priseEnPassant;         $priseEnPassant = 0;
    global $caseOrigineAvecPiece;   $caseOrigineAvecPiece = 0;
    global $aLeDroit;               $aLeDroit = 0;
    global $checkMarkButton;        $checkMarkButton = '';
    global $message;                $message =
    'Écrivez des coordonnées d\'origine et de destination : </br>
    une lettre, un chiffre, une lettre, un chiffre </br>
    exemple : e2e4 au premier tour de jeu';
}


//===== _1_AFFICHAGE/ ============================

function aQuiDeJouer($tourDeJeu) {
    global $affichageTr;
    ($tourDeJeu % 2 == 1) ? 
    $affichageTr .= 'À blanc de jouer.' : 
    $affichageTr .= 'À noir de jouer.';
}


//===== _2_PREMIERE_VERIFICATION/ ============================

function ecrire() {
    global $aLeDroit; 
    global $message;
    $aLeDroit = 0;
    $message =
    'Écrivez des coordonnées d\'origine et de destination : </br>
    une lettre, un chiffre, une lettre, un chiffre </br>
    exemple : e2e4 au premier tour de jeu';
}

function cannibale() {
    global $aLeDroit; 
    global $message;
    $aLeDroit = 0;
    $message = 'On ne mange pas ses propres pièces.';
}

function vide() {
    global $aLeDroit; 
    global $message;
    $aLeDroit = 0;
    $message = 'Aucune pièce sélectionnée.';
}

function tricheur() {
    global $aLeDroit; 
    global $message;
    $aLeDroit = 0;
    $message = 'C\'est à l\'adversaire de jouer.';
}


//===== _3_MOUVEMENT/ ========================================

function oui() {
    global $aLeDroit; 
    global $message;
    $aLeDroit = 1;
    $message = 'ok';
}

function non() {
    global $aLeDroit; 
    global $message;
    $aLeDroit = 0;
    $message = 'coup non autorisé';
}

function priseEnPassant() {
    global $priseEnPassant; 
    global $message;
    $priseEnPassant = 1; 
    $message = $message . '</br> prise en passant';
}


//===== _3_MOUVEMENT/ ______ 4_SPECIAL/ ========================

function promotion($couleur) {
    global $promotion; 
    global $message;
    $promotion = 1;
    $message = 
    'Pion promu. </br> Choisissez votre pièce. </br>
    Tapez une seule lettre. </br>';
    ($couleur ==  'Noir') ? 
    $message .= 'D => ♛ </br>T => ♜ </br>C => ♞ </br>F => ♝' :
    $message .= 'D => ♕ </br>T => ♖ </br>C => ♘ </br>F => ♗';
}


//===== _7_LES_ECHECS/ =================================

function echec($couleurRoi, $couleur) {
    global $aLeDroit;
    global $message;
    global $checkMarkButton;
    if ($couleurRoi == $couleur){
        $aLeDroit = 0;
        $checkMarkButton = '❌';
        $message = 'coup non autorisé </br> vous vous mettez échec';
    }
    global $echec;
    global $affichageTr;
    if ($couleurRoi != $couleur){
        $echec = 1;
        $affichageTr = '<strong>Vous êtes échec !</strong></br> ';
    }
}


//===== _8_REVENIR_EN_ARRIERE/ ================================

function coupRetire() {
    global $message;
    $message = 'Le coup a bien été retiré.';
}


//===== _9_MAT/ ================================

function interdit(){
    global $echec;                      $echec = 1;
    global $aLeDroit;                   $aLeDroit = 0;
}

function echecEtMat($couleurRoi, $couleur) {
    global $echec;
    $echec = 1;
}

function mat() {
    global $finDePartie;            $finDePartie = 1;
    global $stop;
    $stop = 1;
    global $affichageTr;
    $affichageTr = '<strong style = "color: red;" > Échec et Mat !</strong>';
}

function reInitialisation() {
    global $priseEnPassant;             $priseEnPassant = 0;
    global $caseDestinationAvecPiece;   $caseDestinationAvecPiece = 0;
    global $echec;                      $echec = 0;
    global $aLeDroit;                   $aLeDroit = 1;
}

function pat() {
    global $finDePartie;            $finDePartie = 1;
    global $stop;
    $stop = 1;
    global $affichageTr;
    $affichageTr = '<strong style = "color: blue;" > Pat !</strong>';
}


//===== _10_NULLE/ ================================

function repetition3x() {
    global $stop;
    $stop = 1;
    global $finDePartie;            $finDePartie = 1;
    global $affichageTr;
    $affichageTr .= '<strong style = "color: green;" > Nul ! Séquence répétée</strong>';
    $message .= '<strong style = "color: green;" > Nul ! Séquence répétée</strong>';
}

function repetition5x() {
    global $stop;
    $stop = 1;
    // ça dépend des règles...
    global $finDePartie;            $finDePartie = 1;
    global $affichageTr;
    $affichageTr .= '<strong style = "color: green;" > Nul ! 5 fois la même position</strong>';
}

function coup75() {
    global $stop;
    $stop = 1;
    global $finDePartie;            $finDePartie = 1;
    global $affichageTr;
    $affichageTr .= '<strong style = "color: green;" > Nul ! Règle des 75 coups</strong>';
}

function impossibiliteDeMater() {
    global $stop;
    $stop = 1;
    global $finDePartie;            $finDePartie = 1;
    global $affichageTr;
    $affichageTr .= '<strong style = "color: green;" > Nul ! Impossibilité de mater</strong>';
    $message .= '<strong style = "color: green;" > Nul ! Impossibilité de mater</strong>';
}

// accès à demander nul si coup50
// gérer plus tard et à un autre endroit
?>