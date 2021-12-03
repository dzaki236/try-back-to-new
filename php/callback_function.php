<?php 
function sayhello(string $name,callable $filter){
   $finalname = call_user_func($filter,$name);
   echo $finalname.PHP_EOL;
}
sayhello('dzaki','strtoupper');
sayhello('dzaki','strtoupper');
sayhello('dzaki',function(string $name):string {
   return strtoupper($name);
});
sayhello('dzaki',fn($name)=>strtoupper($name));

?>