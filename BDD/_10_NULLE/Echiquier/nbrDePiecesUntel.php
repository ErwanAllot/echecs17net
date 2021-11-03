<?php
//utilisé dans JEU/Saisie.php
$reponse = $bdd->prepare("SELECT COUNT(*) 
as nbrDePiecesUntel
FROM $table_Echiquier
WHERE piece = :P ");

$reponse->execute(array(
  'P' => $piece,
));

$donnee = $reponse->fetch();

$nbrDePieceUntel = $donnee['nbrDePiecesUntel'];

$reponse->closeCursor()

?>