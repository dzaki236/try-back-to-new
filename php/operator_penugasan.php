<?php 
// Penugasan aritmatika
$total = 0;
$total2 = 0;
$total3 = 0;

$produk1 = 10000;
$produk2 = 200000;
// Awalnya
$total = $produk1 + $produk2;
var_dump($total);

// Cara ke 2 
$total2 = $total2+$produk1;
$total2 = $total2+$produk2;
var_dump($total2);

// Cara ke 3
$total3 += $produk1;
$total3 += $produk2;
var_dump($total3);
?>