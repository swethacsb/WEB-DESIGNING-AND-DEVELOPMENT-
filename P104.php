<?php 
$filename = "test.txt"; // Your text file 
$n = 3; // The line number to fetch (example: 3rd line) 
if (file_exists($filename)) { 
    $file = fopen($filename, "r"); 
    $currentLine = 1; 
    $found = false; 
    while (!feof($file)) { 
        $line = fgets($file) 
        if ($currentLine == $n) { 
            echo "Line $n: " . htmlspecialchars($line); 
            $found = true; 
            break; 
        } 
        $currentLine++; 
    } 
   fclose($file); 
    if (!$found) { 
        echo "no data"; 
} 
} else { 
echo "File not found!"; 
} 
?>