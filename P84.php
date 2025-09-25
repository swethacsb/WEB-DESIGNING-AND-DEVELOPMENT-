<?php 
session_start();  
if (isset($_GET['action']) && $_GET['action'] == 'set') { 
$_SESSION['username'] = "Dhanuja"; 
$_SESSION['email'] = "dhanu@example.com"; 
} 
if (isset($_GET['action']) && $_GET['action'] == 'remove_username') { 
unset($_SESSION['username']); 
} 
if (isset($_GET['action']) && $_GET['action'] == 'destroy') { 
session_unset(); 
session_destroy(); 
} 
?> 
<html> 
<head> 
<title>PHP Session Example</title> 
</head> 
<body> 
<h2>Session Handling Example</h2> 
<a href="?action=set">Set Session Values</a> |  
<a href="?action=remove_username">Remove 'username'</a> |  
<a href="?action=destroy">Destroy All Sessions</a> 
<hr> 
<h3>Current Session Data:</h3> 
<pre> 
<?php 
if (!empty($_SESSION)) { 
print_r($_SESSION); 
} else { 
echo "No session data found."; 
} 
?> 
</pre> 
</body> 
</html>