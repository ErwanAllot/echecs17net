<?php

include 'Try.php';

include 'Annuaire_BDD.php';

include $BDD_11_J.'compter.php';


if ($combien == 0){
    include 'DEBUT/choixDeSaCouleur.php';
    $_SESSION['couleur'] = '';
    if (isset($_POST['Blanc']) || isset($_POST['Noir'])){
        

        // obligé de recontrôler ici au cas où qlq'1 se soit connecté entre temps ?
        include $BDD_11_J.'compter.php';
        if ($combien == 0){
                            
            if (isset($_POST['Blanc']) 
            && htmlspecialchars($_POST['Blanc']) == 'Blanc')
                {$_SESSION['couleur'] = 'Blanc';}
            
            if (isset($_POST['Noir']) 
            && htmlspecialchars($_POST['Noir']) == 'Noir')
                {$_SESSION['couleur'] = 'Noir';}

            $couleurJoueur = $_SESSION['couleur'] ;
            $coup = '';
            $tempsDeJeu = time();
            include $BDD_11_J.'inclure.php';
        }
        include 'JEU/_0_BOUTONS/reset.php';
        header("Refresh:0");
        
    }
}

if ($combien == 1){

    include $BDD_11_J.'info.php';
    /*
    echo $tempsDebutJeu;
    echo '</br>';
    echo time() - $tempsDebutJeu;
    echo '</br>';
    */
    $compteARebours =  300 - (time() - $tempsDebutJeu);
    //echo $compteARebours;
    if ($compteARebours < 0){
        include $BDD_11_J.'suppr.php';
        $_SESSION['couleur'] = '';
        header("Refresh:0");
    }

    include 'Fonctions.php'; initialisationDesVariables(); 
    include $BDD_1_S.'tourDeJeu.php'; // 1/2 

    // A voir ici si ça fonctionne sur le net, je peux pas test avant ???
    if($_SESSION['couleur'] == ''){
        include 'AFFICHAGE/FusionVisiteur.php';
        header("Refresh:3");
    }

    if ($_SESSION['couleur'] != ''){

        include $BDD_11_J.'info.php';
        if (strlen($coupJoue) < 5){
            include $BDD_4_E.'promotion.php';
            if ($pionPromu == 1){$message = 'D => ♕ </br>T => ♖ </br>C => ♘ </br>F => ♗';}
        
        if ($tourDeJeu % 2 == 1){
            if ($_SESSION['couleur'] == 'Blanc')
                {include 'JEU/_0_BOUTONS/_Action.php';}
            if ($_SESSION['couleur'] == 'Noir')
                {while($stop != 1) {include 'JEU/_0_BOUTONS/jouerRandom.php';}
                header("Refresh:0");}
        }
        
        if ($tourDeJeu % 2 == 0 ){
            if ($_SESSION['couleur'] == 'Blanc')
                {while($stop != 1) {include 'JEU/_0_BOUTONS/jouerRandom.php';}
                header("Refresh:0");}
            if ($_SESSION['couleur'] == 'Noir')
                {include 'JEU/_0_BOUTONS/_Action.php';}
        }
        
        if ($finDePartie == 1){$coup = 'FIN DE PARTIE';include $BDD_11_J.'maj.php';}
    }

    if (strlen($coupJoue) > 4){ 
        include $BDD_11_J.'info.php';
        //echo $coupJoue;
        $message = $coupJoue;
        include 'JEU/_0_BOUTONS/_Action.php';
    }

        include $BDD_1_S.'tourDeJeu.php'; // 2/2 
        if ($_SESSION['couleur'] == 'Blanc'){include 'AFFICHAGE/FusionBlanc.php';}
        if ($_SESSION['couleur'] == 'Noir'){include 'AFFICHAGE/FusionNoir.php';}
    }
}



?>