<?php

echo "<h4>Menghitung Luas Lingkaran</h4> <br>";
function hitungLuasLingkaran($r){
    $L=3.14*$r*$r;
    echo "Jari-jari= $r <br>";
    echo "Luas Lingkaran = $L <br>";
}
hitungLuasLingkaran(20);

echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4> <br>";
function hitungKelilingLingkaran($r){
    $K=3.14*2*$r;
    echo "Jari-jari= $r <br>";
    echo "Keliling Lingkaran = $K <br>";
}
hitungKelilingLingkaran(15);



?>