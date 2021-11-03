<?php

$reponse = $bdd->prepare("INSERT INTO $table_Nulle 
(configurationMap, 
nbTourSansPriseOuPionDeplace
)
VALUES
(:c, :n)"
);

$reponse->execute([
    'c' => $configurationMap,
    'n' => $nbTourSansPriseOuPionDeplace,
]);
  
$reponse->closeCursor()

?>