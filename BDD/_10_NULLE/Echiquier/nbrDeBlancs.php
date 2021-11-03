<?php
//utilisé dans JEU/Saisie.php
$reponse = $bdd->prepare("SELECT COUNT(*) 
as nbrDeBlancs
FROM $table_Echiquier
WHERE couleur = :C ");

$reponse->execute(array(
  'C' => 'Blanc',
));

$donnee = $reponse->fetch();

$nbrDeBlancs = $donnee['nbrDeBlancs'];

$reponse->closeCursor()

?>