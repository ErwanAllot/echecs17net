<?php
//utilisé dans JEU/Saisie.php
$reponse = $bdd->query("SELECT COUNT(*) as tourDeJeu FROM $table_Sablier");
$tour = $reponse->fetch();
$tourDeJeu = $tour['tourDeJeu'];
?>