<?php 
$sayhello = function (string $name){
   echo "hello $name \n";
};
$sayhello('tes');

function saygoodbye(string $name,$filter){
   $final = $filter($name);
   echo "goodbye $final".PHP_EOL;
}

saygoodbye('dzaki',function(string $name): string {
return strtoupper($name);
});

$namadepan = "Dzaki";
$namabelakang = "Ahnaf Z";

$saydzaki = function() use ($namadepan,$namabelakang){
   echo "Hello $namadepan $namabelakang \n";
};
$saydzaki();
?>