<?php

    include 'Try.php';

    include 'Annuaire_BDD.php';

    include $BDD_11_J.'compter.php';


    if ($combien == 1){
        include 'Fonctions.php'; initialisationDesVariables(); 

        // A voir ici si ça fonctionne sur le net, je peux pas test avant ???
        if($_SESSION['couleur'] == ''){
            include $BDD_1_S.'tourDeJeu.php'; // 1/2 
            include 'AFFICHAGE/FusionVisiteur.php';
            header("Refresh:3");
        }


        if ($_SESSION['couleur'] == 'Blanc'){

            
            include $BDD_1_S.'tourDeJeu.php'; // 1/2 
            // ici on rajoute le CODE pour savoir si l'humain ou random joue
            if ($tourDeJeu % 2 == 1){
                include 'JEU/_0_BOUTONS/_Action.php';
            }
    //===========
            include $BDD_1_S.'tourDeJeu.php'; // 2/2 
    //===========
    if ($finDePartie == 1){echo 'alorsefgzergtrhythtyhtzqergtratg';}
            if ($tourDeJeu % 2 == 0 && $finDePartie == 0){
         /*
                if (isset($_POST['rejouer'])){include 'JEU/_0_BOUTONS/reset.php';}
        /*/
          if($finDePartie == 0){
                 while($stop != 1) {include 'JEU/_0_BOUTONS/jouerRandom.php';}
               header("Refresh:0");
            }
           //*/
        }
            include 'AFFICHAGE/FusionBlanc.php';
        }

      
        if ($_SESSION['couleur'] == 'Noir'){

          
            include $BDD_1_S.'tourDeJeu.php'; // 1/2 
            // ici on rajoute le CODE pour savoir si l'humain ou random joue
            if ($tourDeJeu % 2 == 0 && $tourDeJeu > 1){
                include 'JEU/_0_BOUTONS/_Action.php';
            }
    //===========
            include $BDD_1_S.'tourDeJeu.php'; // 2/2 
    //===========
            if ($tourDeJeu % 2 == 1 && $finDePartie == 0){
                //if (isset($_POST['rejouer'])){include 'JEU/_0_BOUTONS/reset.php';}
                if($finDePartie == 0){
                    while($stop != 1) {include 'JEU/_0_BOUTONS/jouerRandom.php';}
                  header("Refresh:0");
               }
            }
            // à changer l'affichage pour noir
            include 'AFFICHAGE/FusionNoir.php';
        }


    }




    else {
        include 'DEBUT/choixDeSaCouleur.php';

        if (isset($_POST['Blanc'])){
            $_SESSION['couleur'] = '';

            // obligé de recontrôlé ici au cas où qlq'1 se soit connecté entre temps ?
            include $BDD_11_J.'compter.php';
            if ($combien == 0){
                
                $_SESSION['couleur'] = 'Blanc';

                $couleurJoueur = 'Blanc';
                $coup = '';
                include $BDD_11_J.'inclure.php';
            }
            include 'JEU/_0_BOUTONS/reset.php';
            header("Refresh:0");
            
        }

        if (isset($_POST['Noir']) && htmlspecialchars($_POST['Noir']) == 'Noir'){
            
            // obligé de recontrôlé ici au cas où qlq'1 se soit connecté entre temps ?
            include $BDD_11_J.'compter.php';
            if ($combien == 0){
                
                $_SESSION['couleur'] = 'Noir';

                $couleurJoueur = 'Noir';
                $coup = '';
                include $BDD_11_J.'inclure.php';
            }
            include 'JEU/_0_BOUTONS/reset.php';
            header("Refresh:0");
        }

    }
?>