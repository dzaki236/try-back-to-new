<?php 
$data = [1,23,2,34,3,4,4,5,6];
$arrowfunction = fn(int $value)=>$value * 10;
$hasil = array_map($arrowfunction,$data);
var_dump($hasil);

rsort($data);
var_dump($data);

// rsort($data);
// var_dump($data);
var_dump(array_keys($data));
var_dump(array_values($data));
?>