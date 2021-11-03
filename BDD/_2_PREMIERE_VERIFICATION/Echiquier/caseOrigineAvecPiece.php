<?php
//utilisé dans JEU/Saisie.php
$reponse = $bdd->prepare("SELECT COUNT(*) 
as caseOrigineAvecPiece 
FROM $table_Echiquier
WHERE abcisse = :X AND ordonnee = :Y ");

$reponse->execute(array(
  'X' => $origineA,
  'Y' => $origineO,
));

$donnee = $reponse->fetch();

$caseOrigineAvecPiece = $donnee['caseOrigineAvecPiece'];

$reponse->closeCursor()

?>