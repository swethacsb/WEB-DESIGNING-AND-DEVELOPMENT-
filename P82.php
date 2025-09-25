<?php 
setcookie("basic_cookie", "HelloCookie"); 
setcookie("hour_cookie", "Expires in 1 hour", time() + 3600); 
setcookie("path_cookie", "Site-wide cookie", time() + 3600, "/"); 
setcookie("domain_cookie", "Domain specific cookie", time() + 3600, "/", "localhost"); 
setcookie("secure_cookie", "SecureData", time() + 3600, "/", "", true, true); 
?> 
<html> 
<head> 
<title>setcookie() Examples</title> 
</head> 
<body> 
<h2>PHP setcookie() Examples</h2> 
<p>Cookies have been set. Please refresh this page to see their values.</p> 
<?php 
if (!empty($_COOKIE)) { 
echo "<h3>Current Cookies:</h3>"; 
foreach ($_COOKIE as $name => $value) { 
echo htmlspecialchars($name) . " = " . htmlspecialchars($value) . "<br>"; 
} 
} else { 
echo "<p>No cookies found yet. Reload the page.</p>"; 
} 
?> 
</body> 
</html>