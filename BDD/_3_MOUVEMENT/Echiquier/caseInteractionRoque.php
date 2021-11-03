<?php
//utilisé dans JEU/Saisie.php
$reponse = $bdd->prepare("SELECT COUNT(*) as caseInteractionRoque 
FROM $table_Echiquier
WHERE abcisse = :X AND ordonnee = :Y ");

$reponse->execute(array(
  'X' => $tourRoqueA,
  'Y' => $destinationO,
));

$donnee = $reponse->fetch();

$caseInteractionRoque = $donnee['caseInteractionRoque'];

$reponse->closeCursor()

?>