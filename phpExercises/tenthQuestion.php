<?php
$expenses = [250, 500, 100, 450, 300];
array_push($expenses,200);
array_unshift($expenses,600);
$getSum = array_sum($expenses);
echo "Total sum using array_sum ". $getSum;
echo "<br>";
$sortedDesc = rsort($expenses);
print_r($expenses);

?>