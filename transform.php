<?php
//Noah
//fcn accepts a sting and transforms lower_underscore_case to UpperCamelCase

$file = "toTransform.txt";
$fh = fopen($file, "r");        //$fh filehandle
$writeTo = fopen("toWriteTo.txt", "w");

$data = fread($fh, filesize($file));
$line = explode("\n", $data);

for($k = 0; $k < count($line); $k++){
  fwrite($writeTo, camel_case($line[$k]));
}

function camel_case($string, $ucfirst = false){
 $temp = explode('_', $string);
 $temp = $temp ? array_map('ucfirst', $temp) : array($string);
 $temp = implode('', $temp);
 return $temp."\n";
}

fclose($fh);
fclose($writeTo);

?>
