<?php 
session_start(); 
if (isset($_SESSION['visit_count'])) { 
$_SESSION['visit_count']++; 
} else { 
$_SESSION['visit_count'] = 1; 
} 
echo "You have visited this page " . $_SESSION['visit_count'] . " times."; 
?>