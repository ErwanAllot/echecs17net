<?php 
    include 'Piece/Format.php';

    echo '<div class="cadre">';
    echo '<div class="information">';
    echo include 'JEU/_1_AFFICHAGE/TourDeJeu.php';

    echo '<div id="saisie" class="dimension2">';
    echo '<span> Un internaute joue. Attendez sa déconnexion dans un tout petit moment :
    <form name="clock" onSubmit="0">
        <input type="text" name="date" size="5" readonly="true" class="style">
    </form>';
    echo '</div>';
    echo '</div>';

        echo '<div>';
            include 'Repere/blanc.html';
            include 'Repere/chiffre.html';   
        echo '</div>';

        
        echo '<div>';
            include 'Repere/lettre.html';
            include 'Map/echiquier.php'; 
            include $BDD_1_E.'placementPieces.php';
            include 'Map/lecture.php';
        echo '</div>';
        



    echo '</div>';
?>