<?php 
$validationResult = ""; 
$domainName = ""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$email = trim($_POST["email"]); 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
$validationResult = "Valid email address "; 
$parts = explode("@", $email); 
$domainName = $parts[1]; 
} else { 
$validationResult = "Invalid email address "; 
} 
} 
?> 
<html> 
<head> 
<title>Email Validation</title> 
</head> 
<body> 
<h2>Email Validation & Domain Extraction</h2> 
<form method="post"> 
<label>Enter Email Address:</label><br> 
<input type="email" name="email" required> 
<input type="submit" value="Validate"> 
</form> 
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
echo "<h3>Result:</h3>"; 
echo "<p>$validationResult</p>"; 
if (!empty($domainName)) { 
echo "<p>Domain Name: <b>$domainName</b></p>"; 
} 
} 
?> 
</body> 
</html>