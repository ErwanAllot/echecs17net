<?php

// MOUVEMENTS BASIQUES
if (abs($origineA - $destinationA) > 1) non(); 
if (abs($origineO - $destinationO) > 1) non();

// ROQUES
if ($statut == 'initial'){
    if (abs($origineA - $destinationA) == 2 && $origineO == $destinationO){
        if ($origineA < $destinationA){$tourRoqueA = 7;}
        if ($origineA > $destinationA){$tourRoqueA = 0;}
        include $BDD_3_E.'caseInteractionRoque.php';
        if ($caseInteractionRoque == 0) non(); 
        else {
            include $BDD_3_E.'tourRoque.php';
            if ($statutTourRoque != 'initial') non(); 
            else{
                $voyageA = $origineA;
                $voyageO = $origineO;
                $nombrePiecesEntreTourEtRoi = 0;
                while($voyageA != $tourRoqueA){
                    if ($tourRoqueA == 7){$voyageA = $voyageA + 1;}
                    if ($tourRoqueA == 0){$voyageA = $voyageA - 1;}
                    include $BDD_3_E.'caseTraverseeAvecPiece.php';
                    $nombrePiecesEntreTourEtRoi += $caseTraverseeAvecPiece;
                }
                if ($nombrePiecesEntreTourEtRoi > 1) non();
                else {
                    oui();
                    $roque = 1;
                    if ($tourRoqueA == 7){$message .= '</br>Petit Roque';}
                    if ($tourRoqueA == 0){$message .= '</br>Grand Roque';}
                }
            }
        }
    }
}

?>
