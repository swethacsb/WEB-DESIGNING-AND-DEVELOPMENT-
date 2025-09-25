<?php 
$birthMonth = 05; 
$birthDay = 29; 
$today = new DateTime(); 
$thisYear = (int)$today->format('Y'); 
$birthdayThisYear = DateTime::createFromFormat('Y-n-j', "$thisYear-$birthMonth
$birthDay"); 
if ($birthdayThisYear < $today) { 
$birthdayThisYear->modify('+1 year'); 
} 
$interval = $today->diff($birthdayThisYear); 
$daysUntil = $interval->days; 
if ($daysUntil === 0) { 
echo "Happy Birthday! "; 
} elseif ($daysUntil === 1) { 
echo "It's tomorrow! Just 1 day to go."; 
} else { 
echo "Your birthday is in $daysUntil days."; 
} 
?>