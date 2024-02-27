<?php

// Pertemuan 2 - PHP Dasar`
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

echo "Raden Indra Prawirajaya";

print "Raden Indra Prawirajaya";

print_r("Raden Indra Prawirajaya");

var_dump("Raden Indra Prawirajaya");

echo false;

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// namanya tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Raden Indra Prawirajaya";
// echo "Halo, nama saya $nama";

// Operator
// Aritmatika
// + - * / %
$x=10;
$y=20;
echo $x*$y;

// Penggabung String / Concatenation / Concat
// .
$nama_depan = "Raden Indra";
$nama_belakang = "Prawirajaya";
echo $nama_depan ." ". $nama_belakang;

// Assigment
// =, += , *=, /=, %=, .=
$x =1;
$x /=5;
echo $x;

// $nama = "Raden Indra";
// $nama .= " ";
// $nama .= "Prawirajaya";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1")

// Identitas untuk mengecek tipe data
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
$x =30;
var_dump($x < 20 || $x % 2 == 0)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar PHP</title>
</head>
<body>
    <h1>Selamat datang, <?php echo $nama; ?></h1>
    <?php 
        echo"<p>ini paragraf</p>";
     ?>
</body>
</html>