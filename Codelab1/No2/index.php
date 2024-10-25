<?php
$baris = 5; 

for ($i = $baris; $i >= 1; $i--) {
   
    for ($j = $i; $j < $baris; $j++) {
        echo "&nbsp;&nbsp;";
    }
   
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>
