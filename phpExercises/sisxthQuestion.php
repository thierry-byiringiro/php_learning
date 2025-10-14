<?php
//creating an array , searching through an array and replacing array elements

 $fruits = ["Apple", "Banana", "Cherry"];
array_search("Banana",$fruits);

$rep_fruits = array(2 => "Mango");
array_replace($fruits,$rep_fruits);
for($i = 0;$i < sizeof($fruits);$i++){
    echo $fruits[$i] . "<br>";
}
?>