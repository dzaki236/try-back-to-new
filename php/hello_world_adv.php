<?php 
class Helloworld
{
 protected $text = 'Hello World';
 public function show()
 {
  # code...
  $a = $this->text;
   $b = '';
   for ($i=0; $i < strlen($a); $i++) { 
    # code...
    $b.=$a[$i];
   }
   return $b."\n";
 }
}

$data = new Helloworld();
// var_dump($data->call());
echo $data->show();
?>