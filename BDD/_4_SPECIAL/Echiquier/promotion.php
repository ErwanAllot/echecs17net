<?php
//utilisé dans JEU/Saisie.php
$reponse = $bdd->prepare("SELECT COUNT(*) as pionPromu 
FROM $table_Echiquier
WHERE (piece = :P AND ordonnee = :Y) OR (piece = :P AND ordonnee = :YY) ");

$reponse->execute(array(
  'P' => 'pion',
  'Y' => 0,
  'YY' => 7,
));

$donnee = $reponse->fetch();

$pionPromu = $donnee['pionPromu'];

$reponse->closeCursor()

?>