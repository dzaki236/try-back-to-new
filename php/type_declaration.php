<?php 
function sums(int $a,int $b){
   echo $a+$b.PHP_EOL;
}
sums(1,1);
// sums([],[]);
sums('1','1');
sums(false,false);//tidak error karena boolean defaultnya 1 dan kosong
?>