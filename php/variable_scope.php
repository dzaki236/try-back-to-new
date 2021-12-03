<?php 
$nama = "Dzaki Global \n";

function hi(){
   global $nama; //keyword
   // $GLOBAL['nama'];
   // $nama = "Dzaki Local".PHP_EOL;
   return "{$GLOBALS['nama']}".PHP_EOL;
   // var_dump($GLOBALS);
}
echo hi();

// Static scope
function inc(){
   // $counter = 1; // siklus hidupnya mati di 1 function
   static $counter = 1;//siklus hidupnya akan terus menerus,tidak hanya 1 function
   echo "$counter".PHP_EOL;
   $counter++;
}
inc();
inc();
inc();
inc();
inc();
?>