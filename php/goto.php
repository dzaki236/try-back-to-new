<?php 
// echo "ga di looncat".PHP_EOL;
// goto prin;
// echo " di looncat".PHP_EOL; 


// prin:
// echo "hai"."\n";

// perulangan dengan goto
$a=1;
while (true) {
   # code...
   echo "hi".PHP_EOL;
   $a++;
   if($a>=10){
      goto end;
   }
}
end: 
echo "Berhenti! \n";
?>