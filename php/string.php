<?php 
echo 'kutip satu';
echo "\n";//escape sequences
echo '\n';// not escape sequences
echo "hari ini hari jum'at \n";

echo "Dzaki \t Ahnaf \t Zulfilkar \n";
echo <<<heredoc
testing aja penggunaan heredoc
di php \n
Heredoc adalah fitur untuk membuat String yang panjang, sehingga kita tidak perlu manual melakukan enter, tab dan yang lain-lain secara manual

heredoc;

echo <<<'nowdoc'
testing aja penggunaan nowdoc
di php
\n
Nowdoc mirip seperti Heredoc, yang membedakan adalah pada Nowdoc tidak memiliki kemampuan parsing seperti di Heredoc atau Double Quote. Masalah parsing akan kita bahas di materi Manipulasi String

nowdoc;

echo <<<Dzaki
Boleh Dengan nama dzaki
atau nama mantan T_T

Dzaki;
echo ' ';
?>
