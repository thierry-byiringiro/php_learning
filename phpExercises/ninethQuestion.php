<?php
//reversing,summing all array elements, shuffling array elements
$scores = [10, 20, 30, 40, 50];
$arr = array_reverse($scores);
for($i = 0;$i < sizeof($arr);$i++){
   echo $arr[$i]. " ";
 }
$getSum = 0;
for($i = 0;$i < sizeof($scores);$i++){
   $getSum += $scores[$i]; 
 }
echo "<br>";
echo "the total sum is ".$getSum;
echo "<br>";
shuffle($scores);
for($i = 0;$i < sizeof($scores);$i++){
   echo $scores[$i] . " ";
 }
?>