<?php 
$namadepan = "dzaki";
$namabelakang = "ahnaf z";

// Perbedaannya anonymous
$anonymousfunction = function() use ($namadepan,$namabelakang){
return "Hello $namadepan $namabelakang".PHP_EOL;
};

echo $anonymousfunction();

// Perbedaan arrow
$arrowfunction = fn()=>"Hello $namadepan $namabelakang".PHP_EOL;
echo $arrowfunction();
?>