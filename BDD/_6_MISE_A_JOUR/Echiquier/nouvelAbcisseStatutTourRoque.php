<?php 
//utilisé dans JEU/Saisie.php

$req = $bdd->prepare("UPDATE $table_Echiquier 
    SET abcisse = :XX, statut = :SS
    WHERE abcisse = :X AND ordonnee = :Y ");

$req->execute(array(
    'X' => $tourRoqueA,
    'Y' => $origineO,
    'XX' => $tourRoqueDestination,
    'SS' => $nouveauStatutTour,
));

$req->closeCursor(); 
?>