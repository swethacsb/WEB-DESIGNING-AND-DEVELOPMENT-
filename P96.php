<?php 
session_start(); 
if (!isset($_SESSION['username'])) { 
$_SESSION['username'] = "Lakshmisree"; 
$_SESSION['role'] = "Admin"; 
echo "Session variables have been set.<br>"; 
echo "Refresh the page to see them in action."; 
} else { 
echo "Welcome, " . $_SESSION['username'] . "<br>"; 
echo "Your role is: " . $_SESSION['role']; 
} 
?>