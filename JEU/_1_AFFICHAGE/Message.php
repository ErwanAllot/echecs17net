<?php

    if ($checkMarkButton == '✔️') {
        if ($promotion == 0) {$tourPrecedent = $tourDeJeu - 1;}
        else {$tourPrecedent = $tourDeJeu;}
        echo $checkMarkButton  . ' Tour de jeu : ' . $tourPrecedent . '</br></br>';
    }

  
    echo $checkMarkButton . ' ' . $message;
    echo '</br></br>';
    if (isset($_POST['coup'])) {echo '<em>Saisie : ' . $saisie . '</em>';}
    
    if (isset($_POST['coup']) != "" ) {     
        echo '</br></br>';
        if ($pionPromu == 0){
            if ($caseOrigineAvecPiece == 1) {
                $pieceCouleur = $piece . $couleur;
                echo $$pieceCouleur . '</br>'; 
                echo $couleur . ' ' . $piece . ' ' . $statut;


                echo '</br>' . $origineA . '-=' .$origineO ;
                echo '</br>' . $destinationA . '-=' .$destinationO ;
            }
        }

    
    }
    

    if (isset($_POST['reprendre']) && $tourDeJeu > 1) {
        echo $tourDeJeuR . '</br>';

        echo $couleur . '</br>';
        echo $piece . '</br>';
        echo $statut . '</br>';
        echo $abcisse . '</br>';
        echo $ordonnee . '</br>';
    
        echo $mouvement . '</br>';
    
        echo $pieceAdv . '</br>';
        echo $statutAdv . '</br>';
        echo $abcisseAdv . '</br>';
        echo $ordonneeAdv . '</br>';
    }


?>