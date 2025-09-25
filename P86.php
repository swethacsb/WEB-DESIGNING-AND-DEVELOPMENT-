<?php 
echo "<h3>PHP File Functions </h3>"; 
$file = fopen("test.txt", "r") or die("Unable to open test.txt!"); 
$size = filesize("test.txt"); 
echo "File size: $size bytes<br>"; 
echo "<b>Using fread():</b><br>"; 
echo nl2br(fread($file, $size)) . "<br>"; 
fclose($file); 
echo "<b>Using file_get_contents():</b><br>"; 
echo nl2br(file_get_contents("test.txt")) . "<br>"; 
$file = fopen("test.txt", "r"); 
echo "<b>Reading line-by-line:</b><br>"; 
while (!feof($file)) { 
echo nl2br(fgets($file)); 
} 
fclose($file); 
file_put_contents("test.txt", "\nThis line is appended by PHP.", FILE_APPEND); 
$newFile = fopen("newfile.txt", "w"); 
fwrite($newFile, "This is a new file created with fwrite().\n"); 
fclose($newFile); 
copy("test.txt", "copy.txt"); 
rename("copy.txt", "renamed.txt"); 
unlink("renamed.txt"); 
unlink("newfile.txt"); 
echo "<br><b>All file operations completed successfully!</b>"; 
?> 