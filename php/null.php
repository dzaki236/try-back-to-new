<?php 
$name = "dzaki";
echo "sebelum di hapus : $name \napakah null? : ";
var_dump(is_null($name));
$name = null;
echo "sesudah di hapus : $name \n";

$age = null;
echo "dariawal udah di hapus : $age \n";

// isset untuk mengecek variable yang belum yakin kalau ada
$data = "aku ganteng";
echo $data."\n";
var_dump(isset($data));
echo "$data \n";

// is_null untuk mengecek variable yang sudah yakin ada namun masih ingin mengecek isi variablenya
$tesy = 'null';
var_dump(is_null($tesy));
?>