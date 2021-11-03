<?php
//utilisé dans JEU/Saisie.php
$reponse = $bdd->prepare("SELECT COUNT(*) 
as nbrDePiecesTotal
FROM $table_Echiquier
WHERE abcisse < :X AND ordonnee < :Y ");

$reponse->execute(array(
  'X' => 8,
  'Y' => 8,
));

$donnee = $reponse->fetch();

$nbrDePieceTotal = $donnee['nbrDePiecesTotal'];

$reponse->closeCursor()

?>