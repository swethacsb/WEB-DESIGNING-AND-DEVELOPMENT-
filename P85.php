<html> 
<head> 
<title>Get File Name from Path</title> 
</head> 
<body> 
<h2>Enter File Path</h2> 
<form method="post"> 
<input type="text" name="filepath" placeholder="Enter file path here" required> 
<input type="submit" value="Get File Name"> 
</form> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$path = $_POST['filepath']; 
$fullName = basename($path); 
$info = pathinfo($path); 
$nameWithoutExt = $info['filename']; 
$extension = isset($info['extension']) ? $info['extension'] : 'No extension'; 
echo "<h3>Results:</h3>"; 
echo "Full File Name: " . $fullName . "<br>"; 
echo "File Name (without extension): " . $nameWithoutExt . "<br>"; 
echo "File Extension: " . $extension . "<br>"; 
} 
?> 
</body> 
</html>