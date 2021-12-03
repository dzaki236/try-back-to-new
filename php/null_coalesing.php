<?php 
$array = ['action'=>'test'];

# Normalnya menggunakan isset untuk pengecekkan
// if (isset($array['action'])) {
//    # code...
//    $action = $array['action'];
// } else {
//    # code...
//    $action = "nothing";
// }

# Namun bisa dengan null coalesing operator
$action = $array['action']??'nothing';
echo $action.PHP_EOL;
?>