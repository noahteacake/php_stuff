<?php
//Noah
//fcn scans a dir and appends a given string to the first file in dir that 
//has the extension "txt"

$string = "Here is a string to be appended to the first file in dir that is a text file.\n";

$handle = opendir("/Users/MrTeaCake/Documents/scripts_2013/php");

//check--can erase later
while($file = readdir($handle)){
 echo "$file\n";
}


$txtFiles = glob("/Users/MrTeaCake/Documents/scripts_2013/php/*.txt");
$file = $txtFiles[0];
echo "$file\n";
$fh = fopen($file, "a");
fwrite($fh, $string); 
print_r($txtFiles);

closedir($handle);
?>
