<?php 
$i =1;
while (true) {
   # code...
   echo "jalan terus $i x".PHP_EOL;
   $i++;
   if ($i>=10) {
      # code...
      echo "stop";
      break;//menghentikan semua perulangan
   }
}
$i = 0;
for ($i=0; $i < 100; $i++) { 
   # code...
   if ($i%2==0) {
      # code nya di skip
      continue;//menghentikan perulangan saat ini dan melanjutkan ke pengulangan berikutnya
   }
   echo "$i".PHP_EOL;
}
?>