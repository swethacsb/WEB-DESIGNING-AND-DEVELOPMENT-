<?php
$str="Hello world hello";
$words=preg_split("/\s+/",strtolower($str));
print_r(array_count_values($words));
?>
