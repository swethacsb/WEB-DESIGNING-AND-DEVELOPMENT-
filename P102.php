<?php 
session_start(); 
$_SESSION["username"] = "Lakshmisree"; 
$_SESSION["email"] = "lakshmisree@example.com"; 
echo "Username: " . $_SESSION["username"] . "<br>"; 
echo "Email: " . $_SESSION["email"] . "<br>"; 
if (session_status() == PHP_SESSION_ACTIVE) { 
echo "Session is active!"; 
} 
?>