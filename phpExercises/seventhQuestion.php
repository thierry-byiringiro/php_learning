<?php
//sorting indexed and associative array 
//1: sorting indexed array
$numbers = [3, 1, 4, 2];
 sort($numbers);
 for($i = 0;$i < sizeof($numbers);$i++){
   echo $numbers[$i];
 }
echo "<br>";
rsort($numbers);
for($i = 0;$i < sizeof($numbers);$i++){
   echo $numbers[$i];
 }
echo "<br>";

//2: sorting associative array

$marks = ["John"=>75, "Mary"=>90, "Paul"=>60];
asort($marks);
foreach($marks as $key => $value){
    echo $key . " " . " => " . $value . " " . " ";
}
echo "<br>";
 arsort($marks);

foreach($marks as $key => $value){
    echo $key . " " . " => " . $value ." ". " ";
}
?>