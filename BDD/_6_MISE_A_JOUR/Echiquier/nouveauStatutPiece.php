<?php 
//utilisé dans JEU/Saisie.php

$req = $bdd->prepare("UPDATE $table_Echiquier 
    SET statut = :statut
    WHERE abcisse = :XX AND ordonnee = :YY ");

$req->execute(array(
    'statut' => $nouveauStatut,
    'XX' => $destinationA,
    'YY' => $destinationO,
));

$req->closeCursor(); 
?>