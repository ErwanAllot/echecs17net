<?php session_start(); ?>
<html>

<head> 
<meta name="author" content="Erwan ALLOT">
<meta charset="UTF-8">

<meta content="url=https://erwanallot.com/echecs17" />
<!--
    <meta http-equiv="refresh" content="5;url=http://localhost/echecs16" />
-->

<link rel="stylesheet" href="style.css" />

</head> 

<body onLoad="clock()">

<?php $webSitePage = 'https://erwanallot.com/echecs17'; ?>

<?php 
// j'ai un problème avec random, il ne doit pas être fixe parce que roi peut
// se mettre en échecs
// à voir par la suite
include 'GESTION/_Package.php'; ?>

</body>

<?php
if ($combien == 1){include 'script_Temps.html';}
?>

</html>