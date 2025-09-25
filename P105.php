<?php 
function getStartAndEndDate($week, $year) { 
$startDate = new DateTime(); 
$startDate->setISODate($year, $week); 
$endDate = clone $startDate; 
$endDate->modify('+6 days'); 
return array( 
'start' => $startDate->format('Y-m-d'), 
'end'   => $endDate->format('Y-m-d') 
); 
} 
$week = 12; 
$year = 2014; 
$result = getStartAndEndDate($week, $year); 
echo "Week $week of $year starts on: " . $result['start'] . "<br>"; 
echo "Week $week of $year ends on: " . $result['end']; 
?> 