<?php 
session_start(); // Start the session 
if (isset($_SESSION['pageviews'])) { 
$_SESSION['pageviews']++; // Increment counter 
} else { 
$_SESSION['pageviews'] = 1; // First visit 
} 
echo "You have visited this page " . $_SESSION['pageviews'] . " times."; 
?>