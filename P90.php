<?php 
$filename = "test.txt"; 
if (file_exists($filename)) { 
$file = fopen($filename, "r") or die("Unable to open file!"); 
while (!feof($file)) { 
echo fgets($file) . "<br>"; // Read line by line 
} 
fclose($file); 
} else { 
echo "File not found!"; 
} 
?>