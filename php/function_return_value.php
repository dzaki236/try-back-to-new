<?php 
function sum(int $a,int $b):int{
   return $a + $b;
}
var_dump(sum(10,10));

function getfinalgrade(int $value):string
{
   if ($value >= 80) {
      # code...
      return "A";
   } elseif ($value>=70) {
      # code...'
      return "B";
   } elseif($value >= 60){
      # code...
      return "C";
   }elseif ($value >= 50) {
      # code...
      return "D";
   }else {
      # code...
      return 1;// di konversikan ke string (type jugling)
   }
   echo "text";//tidak di eksekusi,karna setelah menemui kata return akan di ignore
}
var_dump(getfinalgrade(90));
?>