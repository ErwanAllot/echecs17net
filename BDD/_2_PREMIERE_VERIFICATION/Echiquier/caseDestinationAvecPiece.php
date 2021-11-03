<?php
//utilisé dans JEU/Saisie.php
$reponse = $bdd->prepare("SELECT COUNT(*) 
as caseDestinationAvecPiece 
FROM $table_Echiquier
WHERE abcisse = :X AND ordonnee = :Y ");

$reponse->execute(array(
  'X' => $destinationA,
  'Y' => $destinationO,
));

$donnee = $reponse->fetch();

$caseDestinationAvecPiece = $donnee['caseDestinationAvecPiece'];

$reponse->closeCursor()

?>