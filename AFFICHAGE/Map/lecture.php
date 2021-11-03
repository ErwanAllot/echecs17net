<?php

echo '<table>';    
    foreach ($tab as $key => $unTab){
        echo "<tr>";
    foreach ($unTab as $key2 => $unTab2){
        echo "<td>".$unTab2."</td>";
    }
    echo "</tr>";
    }
echo '</table>';

?>