<?php 
session_start();  
if (!isset($_SESSION['name'])) { 
$_SESSION['name'] = "Lakshmisree"; 
$_SESSION['count'] = 1; 
echo "Session started and variables set.<br>"; 
} else { 
$_SESSION['count']++; 
echo "Welcome back, " . $_SESSION['name'] . "<br>"; 
echo "Visits: " . $_SESSION['count'] . "<br>"; 
} 
echo "Session ID: " . session_id() . "<br>"; 
if ($_SESSION['count'] == 3) { 
session_regenerate_id(true); 
echo "Session ID regenerated.<br>"; 
} 
if ($_SESSION['count'] == 5) { 
session_unset(); 
echo "Session variables cleared.<br>"; 
} 
if ($_SESSION['count'] == 6) { 
session_destroy(); 
echo "Session destroyed.<br>"; 
} 
?>