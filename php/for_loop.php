<?php 

// perulangan tanpa henti
// for (;  ; ) { 
//    # code...
//    echo "loop for di php \n";
// }

// Perulangan dengan kondisi (1)
$counter = 1;
for (;$counter <= 10;) { 
   # code...
   echo "ini kondisi ke $counter".PHP_EOL;
   $counter++;
}

// Perulangan dengan kondisi (2)
for ($i=0;$i<=10; ) { 
   # code...
   echo "ini kondisi ke $i".PHP_EOL;
   $i++;
}

// Perulangan dengan kondisi (3)
for ($a=10;$a>=0; $a--) { 
   # code...
   echo "ini kondisi ke $a".PHP_EOL;
}

// Perulangan tanpa kurung kurawal
for ($b=0; $b < 10; $b++) :
   # code...
   echo "ini kondisi ke $b".PHP_EOL;

endfor;
?>