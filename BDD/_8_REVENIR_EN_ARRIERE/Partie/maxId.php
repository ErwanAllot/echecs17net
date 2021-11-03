<?php

$reponse = $bdd->prepare("SELECT * FROM $table_Partie order by id desc limit 1");

$reponse->execute();

$donnees = $reponse->fetch();

    $tourDeJeuR = $donnees['tourDeJeu'];

    $couleur = $donnees['couleur'];
    $piece = $donnees['piece'];
    $statut = $donnees['statut'];
    $abcisse = $donnees['abcisse'];
    $ordonnee = $donnees['ordonnee'];

    $mouvement = $donnees['mouvement'];

    $pieceAdv = $donnees['pieceAdv'];
    $statutAdv = $donnees['statutAdv'];
    $abcisseAdv = $donnees['abcisseAdv'];
    $ordonneeAdv = $donnees['ordonneeAdv'];

$reponse->closeCursor()

?>