<?php 
function sumAll(...$values){
   $total =0;
   foreach ($values as $value) {
      # code...
      $total +=$value;
   }echo "Total ". implode(",",$values)." = $total".PHP_EOL;
}
sumAll(1,2,3,3,4);
?> 