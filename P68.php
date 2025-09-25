<?php
try{
  $a=10/$b=0;
}catch(DivisionByZeroError $e){
  echo "Error: ".$e->getMessage();
}
?>
