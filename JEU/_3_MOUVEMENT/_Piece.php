<?php

switch ($piece) {
    case 'tour':        include 'tour.php';       break;
    case 'cavalier':    include 'cavalier.php';   break;
    case 'fou':         include 'fou.php';        break;
    case 'dame':        include 'dame.php';       break;
    case 'roi':         include 'roi.php';        break;
    case 'pion':        include 'pion.php';       break;
}

?>