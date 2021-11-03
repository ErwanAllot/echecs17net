<?php 
//utilisé dans JEU/Saisie.php

$req = $bdd->prepare("UPDATE $table_Echiquier 
    SET abcisse = :XX, ordonnee = :YY
    WHERE abcisse = :X AND ordonnee = :Y ");

$req->execute(array(
    'X' => $origineA,
    'Y' => $origineO,
    'XX' => $destinationA,
    'YY' => $destinationO,
));

$req->closeCursor(); 
?>