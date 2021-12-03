<?php 
function sayname($name,$tinggal=null){
   echo "HI $name tinggal di $tinggal".PHP_EOL;
}
// parameter name akan di buatkan ketika function di panggil,akan berubah sesuai isi di functionnya
sayname('dzaki','depok');
sayname('ahnaf','depok');
sayname('zulfikar','depok');
sayname('tes');

?>