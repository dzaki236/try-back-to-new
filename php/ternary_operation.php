<?php 
$gender = "P";

$hi = null;

# Tanpa Ternary 
// if ($gender == "L") {
//    # code...
//    $hi = "hi bro";
// } else {
//    # code...
//    $hi = "hi sist";
// }

# Dengan Ternary
$hi = $gender == "L"?"Hi bro":"hi sis";
echo $hi."\n";
?>