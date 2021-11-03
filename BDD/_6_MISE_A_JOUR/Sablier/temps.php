<?php
//utilisé dans AFFICHAGE/Boutons/reset.php

$bdd->exec("INSERT INTO $table_Sablier(temps) VALUES(NOW())");

?>