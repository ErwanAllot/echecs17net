<?php
//utilisé dans JEU/Saisie.php

// en fait, c'est la même requête que caseDestinationAvecPiece

$reponse = $bdd->prepare("SELECT COUNT(*) as caseTraverseeAvecPiece 
FROM $table_Echiquier
WHERE abcisse = :X AND ordonnee = :Y ");

$reponse->execute(array(
  'X' => $voyageA,
  'Y' => $voyageO,
));

$donnee = $reponse->fetch();

$caseTraverseeAvecPiece = $donnee['caseTraverseeAvecPiece'];

$reponse->closeCursor()

?>