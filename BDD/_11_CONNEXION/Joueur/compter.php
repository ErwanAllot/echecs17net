<?php

$reponse = $bdd->prepare("SELECT COUNT(*) as combien FROM $table_joueur");

$reponse->execute();

$donnee = $reponse->fetch();

    $combien = $donnee['combien'];

$reponse->closeCursor()

?>