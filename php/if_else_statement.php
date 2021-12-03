<?php 
// if else tanpa kurung kurawal
if (true) 
   # code...
   $a = 0;
else
   # code...
   $a = 1;

   // if else dengan kurung kurawal rekomendasi
if (true) {
   # code...
   $a = 3;
} else {
   # code...
   $b = 2;
}

// contoh
$nilai = 75;
$absen = 90;
if ($nilai >= 75 && $absen >=75) {
   # benar mau ngelakuin apa
   echo "anda lulus".PHP_EOL;
}else {
   # salah melakukan apa
   echo "anda belum lulus".PHP_EOL;
}

# cara 1
if ($nilai >= 80 && $absen >=80){
   # benar mau ngelakuin apa
   echo "Nilai A".PHP_EOL;}
else if ($nilai >= 70 && $nilai >= 70){
   # jika benar lagi mau melakukan apa
   echo "Nilai B".PHP_EOL;}
else if ($nilai >= 60 && $nilai >= 60){
   # jika benar lagi mau melakukan apa
   echo "Nilai C".PHP_EOL;}
else if ($nilai >= 50 && $nilai >= 50){
   # jika benar lagi mau melakukan apa
   echo "Nilai D".PHP_EOL;}
else {
   # salah melakukan apa
   echo "Nilai E".PHP_EOL;
}

# cara 2
if ($nilai >= 80 && $absen >=80):
   # benar mau ngelakuin apa
   echo "Nilai A".PHP_EOL;
elseif ($nilai >= 70 && $nilai >= 70):
   # jika benar lagi mau melakukan apa
   echo "Nilai B".PHP_EOL;
elseif ($nilai >= 60 && $nilai >= 60):
   # jika benar lagi mau melakukan apa
   echo "Nilai C".PHP_EOL;
elseif ($nilai >= 50 && $nilai >= 50):
   # jika benar lagi mau melakukan apa
   echo "Nilai D".PHP_EOL;
else :
   # salah melakukan apa
   echo "Nilai E".PHP_EOL;
endif;


$barang1= 45_000_000;
$barang2= 45_000_000;
if ($barang1 <= 2_000_000 && $barang2 <=4_000_000) {
   # code...
   echo "Murah \n";
}elseif ($barang1 == $barang2) {
   # code...
   echo "Boleh lah".PHP_EOL;
}
 else {
   # code...
   echo "Mahal".PHP_EOL;
}

?>