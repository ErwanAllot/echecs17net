<?php

$reponse = $bdd->prepare("UPDATE $table_joueur SET coup = :p 
WHERE couleur = :b OR couleur = :n ");

$reponse->execute([
    'p' => $coup,
    'b' => 'Blanc',
    'n' => 'Noir',
]);
  
$reponse->closeCursor()

 
?>