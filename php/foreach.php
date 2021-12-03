<?php 

// looping array biasa (index nomor) (manual)
$nama=['dzaki','ahnaf','z'];
$name=['dzaki','ahnaf','z'];
for ($i=0; $i < count($nama); $i++) { 
   # code...
   echo "data ke $i : $nama[$i]".PHP_EOL;
}

// looping foreach dengan index
foreach ($nama as $index=>$nama) {
   # code...
   echo "$index Hello $nama \n";
}

// looping foreach tanpa index
foreach ($name as $name) {
   # code...
   echo "Hello $name \n";
}

// perulangan array map
$person = [
   'nama'=>'Dzaki',
   'Alamat'=>'Depok',
   'TTL'=>'8 Agustus 2004'
];
foreach ($person as $key => $value) {
   # code...
   echo "$key : $value".PHP_EOL;
}
?>