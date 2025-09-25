<?php 
session_start(); 
// Set admin credentials 
$adminUser = "admin"; 
$adminPass = "12345"; 
// Logout process 
if (isset($_GET['logout'])) { 
session_unset(); 
session_destroy(); 
header("Location: admin.php"); 
exit(); 
} 
// Login process 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
if ($_POST['username'] === $adminUser && $_POST['password'] === $adminPass) { 
$_SESSION['admin'] = $_POST['username']; 
} else { 
$error = "Invalid username or password!"; 
} 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>Admin Login</title> 
</head> 
<body> 
<?php 
// If admin is NOT logged in, show login form 
if (!isset($_SESSION['admin'])): 
?> 
<h2>Admin Login</h2> 
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?> 
<form method="post" action=""> 
<label>Username:</label><br> 
<input type="text" name="username" required><br><br> 
<label>Password:</label><br> 
<input type="password" name="password" required><br><br> 
<input type="submit" value="Login"> 
</form> 
<?php 
// If admin is logged in, show dashboard 
else: 
?> 
<h2>Welcome, <?php echo $_SESSION['admin']; ?>!</h2> 
<p>This is the admin dashboard.</p> 
<a href="?logout=true">Logout</a> 
<?php endif; ?> 
</body> 
</html>