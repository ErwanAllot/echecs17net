<?php

if (isset($_POST['jeu']) && htmlspecialchars($_POST['jeu']) == 'Jouer'){
    include 'jouer.php';
                // je viens de rajouter cette ligne pour que random joue derrière
                header("Refresh:0");
}

if (isset($_POST['rejouer']) && htmlspecialchars($_POST['rejouer']) == 'Reset'){
    include 'reset.php';
}

if ($tourDeJeu > 1){
    if (isset($_POST['reprendre']) 
    && htmlspecialchars($_POST['reprendre']) == 'ComeBack'){
        include 'JEU/_8_REVENIR_EN_ARRIERE/_ComeBack.php';
    }
}

if (isset($_POST['deconnexion'])){
    include $BDD_11_J.'suppr.php';
    $_SESSION['couleur'] = '';
    header("Refresh:0");
}

for ($i=0; $i<8; $i++) {
    for ($y=0; $y<8; $y++) {
        $saisie = '';
        $coup = '';
        if (isset($_POST[$i.$y])){ 
            $message = $i.$y;
            $cliqueSouris = $i.$y;
            
            include $BDD_11_J.'info.php';
            if (strlen($coupJoue) == 0 || strlen($coupJoue) > 4 ){
                $coup = $cliqueSouris;
               // echo $coup;
                include $BDD_11_J.'maj.php';
            }
            else if (strlen($coupJoue) == 2){
                $saisie = $coupJoue.$cliqueSouris;
               // echo $saisie;
                $coup = '';
                include $BDD_11_J.'maj.php';
            }
        } 
        if (strlen($saisie) == 4){include 'jouerClic.php';
            // je viens de rajouter cette ligne pour que random joue derrière
            header("Refresh:0");}

    }
}

?>