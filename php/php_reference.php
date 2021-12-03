<?php 
// assign by reference
$nama = "dzaki";
$namalain = &$nama;
$namalain = 'budi';
echo $nama.PHP_EOL;

function inc(int &$value){
   $value++;
}
$counter = 1;
inc($counter);
echo $counter.PHP_EOL;

function &getvalues(){
   static $value = 100;
   return $value;
}
$a = &getvalues();
$a = 300;
$b = &getvalues();
echo $b.PHP_EOL;
?> 