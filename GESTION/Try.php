<?php  


    try{
        $bdd = new PDO('/je ne mets pas mes login/');
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }


?>