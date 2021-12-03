<?php 

// faktorial Dengan looping
function factorialloop(int $value): int 
{
   $total = 1;
   for ($i=1; $i <= $value; $i++) { 
      # code...
      $total *= $i;
   }
   return $total;
}
var_dump(factorialloop(5));

// faktorial Dengan rekursive
function faktorialrecursive(int $value): int 
{
   if ($value == 1) {
      # code...
      return 1;
   }else {
      return $value * faktorialrecursive($value - 1);
   }
}
var_dump(faktorialrecursive(5));

function stackoverflow(int $value){
   if($value == 0){
      echo "end loop".PHP_EOL;
   }else {
      echo "loop - $value".PHP_EOL;
      stackoverflow($value-1);
   }
}
stackoverflow(5_000_000);
?>