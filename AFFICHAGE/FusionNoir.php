<?php 
    include 'Piece/FormatBlanc.php';

    echo '<div class="cadre">';
        echo '<div>'; 
            include 'Coup/information.html'; 
        echo '</div>';

        echo '<div>';
            include 'Repere/blanc.html';
            include 'Repere/chiffreNoir.html';   
        echo '</div>';

        /*
        echo '<div>';
            include 'Repere/lettre.html';
            include 'Map/echiquier.php'; 
            include $BDD_1_E.'placementPieces.php';
            include 'Map/lecture.php';
        echo '</div>';
        */

        echo '<div>';
            include 'Repere/lettreNoir.html';
            include 'Map/echiquierNoir.php'; 
            include $BDD_1_E.'placementPiecesBlanc.php';
            include 'Map/lecture.php';
        echo '</div>';

        echo '<div>'; 
            include 'Boutons/boutons.html'; 
        echo '</div>';
    echo '</div>';
?>