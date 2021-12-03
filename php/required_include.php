<?php 
// dan posisi include harus di paling atas!
// require "./libs/hello.ph";//jika salah akan muncul eror file tidak ketemu
include "./libs/hello.php";//jika salah akan muncul warn saja jika file tak ada
include "./libs/hello.php";//jika salah akan muncul warn saja jika file tak ada

echo h();
?> 