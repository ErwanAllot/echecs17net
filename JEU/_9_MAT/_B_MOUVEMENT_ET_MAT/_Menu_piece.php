<?php

switch ($piece) {
    case 'tour':        include 'mat_tour.php';       break;
    case 'cavalier':    include 'mat_cavalier.php';   break;
    case 'fou':         include 'mat_fou.php';        break;
    case 'dame':        include 'mat_dame.php';       break;
    case 'roi':         include 'mat_roi.php';        break;
    case 'pion':        include 'mat_pion.php';       break;
}

?>