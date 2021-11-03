<?php 

$reponse = $bdd->prepare("DELETE FROM  $table_Echiquier 
WHERE abcisse = :X AND ordonnee = :Y ");

$reponse->execute(array(
  'X' => $destinationA,
  'Y' => $destinationO,
));

$reponse->closeCursor()

?>