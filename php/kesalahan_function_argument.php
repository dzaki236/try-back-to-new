<?php 
function sayhello($firstname = "dzaki",$last){
   echo $firstname.$last.PHP_EOL;
}

sayhello('dzaki');//error karena default argument defaultnya lebih baik di belakang / akhir argument
?>