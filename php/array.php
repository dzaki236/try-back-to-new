<?php 
// Membuat array pertama
$values = array(10,20,30,40,50,60);
var_dump($values);

echo "\n";

// Membuat array kedua
$nama = ['dzaki','ahnaf','zulfikar'];
var_dump($nama);

// Operasi array
$names = ['dzaki','ahnaf','z'];
# mengambil data index ke 0
var_dump($names[0]);

# mengubah data index ke 0
$names[0]='Dzaki';
var_dump($names);

# menghapus data index ke 1
unset($names[1]);
var_dump($names);

# menambahkan data 
$names[]='Dzaki';
var_dump($names);

# menghitung data array
var_dump(count($names));

// Array sebagai map
# default
$nm = array(0=>'Dzaki',1=>'Ahnaf',2=>'Zulfikar');
var_dump($nm);

# tapi kita juga bisa mengubahnya sebagai map
$produk = ['nama'=>'Citato','berat'=>'100gram','makanan enak'];
var_dump($produk['nama']);
var_dump($produk[0]);

// Array di dalam array
$produk = ['nama'=>'Citato','berat'=>'100gram',
'info_lanjutan'
=>
['pabrik'=>'pt abc',
'distributor'=>'pt abc']
];
var_dump($produk['info_lanjutan']['pabrik']);
?>