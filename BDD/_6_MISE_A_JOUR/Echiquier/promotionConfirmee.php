<?php

$reponse = $bdd->prepare("UPDATE $table_Echiquier
SET piece = :PP, statut = :SS
WHERE (piece = :P AND ordonnee = :Y) ");

$reponse->execute(array(
  'P' => $pion,
  'Y' => $ordonnee,
  'PP' => $piece,
  'SS' => $statut,
));

$reponse->closeCursor()

?>

