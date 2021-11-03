<?php
//utilisé dans JEU/Boutons/reset.php

$bdd->exec(
    "INSERT INTO $table_Echiquier(couleur, piece, statut, abcisse, ordonnee) 
    VALUES
    ('Noir', 'tour', 'initial', 0, 0),
    ('Noir', 'cavalier', 'initial', 1, 0),
    ('Noir', 'fou', 'initial', 2, 0),
    ('Noir', 'dame', 'initial', 3, 0),
    ('Noir', 'roi', 'initial', 4, 0),
    ('Noir', 'fou', 'initial', 5, 0),
    ('Noir', 'cavalier', 'initial', 6, 0),
    ('Noir', 'tour', 'initial', 7, 0),


    ('Noir', 'pion', 'initial', 0, 1),
    ('Noir', 'pion', 'initial', 1, 1),
    ('Noir', 'pion', 'initial', 2, 1),
    ('Noir', 'pion', 'initial', 3, 1),
    ('Noir', 'pion', 'initial', 4, 1),
    ('Noir', 'pion', 'initial', 5, 1),
    ('Noir', 'pion', 'initial', 6, 1),
    ('Noir', 'pion', 'initial', 7, 1),

    ('Blanc', 'tour', 'initial', 0, 7),
    ('Blanc', 'cavalier', 'initial', 1, 7),
    ('Blanc', 'fou', 'initial', 2, 7),
    ('Blanc', 'dame', 'initial', 3, 7),
    ('Blanc', 'roi', 'initial', 4, 7),
    ('Blanc', 'fou', 'initial', 5, 7),
    ('Blanc', 'cavalier', 'initial', 6, 7),
    ('Blanc', 'tour', 'initial', 7, 7),

    ('Blanc', 'pion', 'initial', 0, 6),
    ('Blanc', 'pion', 'initial', 1, 6),
    ('Blanc', 'pion', 'initial', 2, 6),
    ('Blanc', 'pion', 'initial', 3, 6),
    ('Blanc', 'pion', 'initial', 4, 6),
    ('Blanc', 'pion', 'initial', 5, 6),
    ('Blanc', 'pion', 'initial', 6, 6),
    ('Blanc', 'pion', 'initial', 7, 6)

    ");

?>