<?php
//hitumh total volume 2 kubus
// kubus a=9, sisi kubus b=4

// $sisi_a=9;
// $sisi_b=4;

//  $volume=$sisi_a*$sisi_a*$sisi_a + $sisi_b*$sisi_b*$sisi_b;
//  echo "Total volume 2 kubus adalah = $volume";
// echo "<br>";

function total_volume_dua_kubus($a, $b) {
    return $a*$a*$a + $b*$b*$b;
    
}

echo "Total volume dua kubus a & b = ".total_volume_dua_kubus(9, 4);
echo "<br>";
echo "Total volume dua kubus c & d = ".total_volume_dua_kubus(10, 15);
echo "<br>";


?>