<?php 
$filename = "test.txt"; 
if (file_exists($filename)) { 
$file = fopen($filename, "r"); 
$content = fread($file, filesize($filename)); 
echo $content; 
fclose($file); 
} else { 
echo "File does not exist."; 
} 
?> 