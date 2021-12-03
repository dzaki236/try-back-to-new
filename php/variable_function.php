<?php 
function foo(){
   echo "foo".PHP_EOL;
}

$name = 'foo';
$name();

function say(string $name,$filter){
   $names = $filter($name);
   echo "Hello $names".PHP_EOL;
}
say('dzaki','strtoupper');
?>