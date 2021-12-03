<?php 

$a = 0;
while ($a <= 10) {
   # code...
   echo "Hello while loop inc $a".PHP_EOL;
   $a++;
}
$b=10;

while ($b >= 0) :
   # code...
   echo "Hello while loop dec $b".PHP_EOL;
   $b--;
endwhile;
?>