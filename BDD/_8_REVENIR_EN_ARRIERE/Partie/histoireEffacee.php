<?php

$bdd->exec("DELETE FROM $table_Partie order by id desc limit 1");

?>