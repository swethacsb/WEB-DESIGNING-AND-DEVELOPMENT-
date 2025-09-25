<?php
function sumEven($arr){
  return array_sum(array_filter($arr, fn($x)=>$x%2==0));
}
?>
