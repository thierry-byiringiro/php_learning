<?php
//sorting associative array using their keys

$products = ["c"=>"Camera", "a"=>"Apple","b"=>"Book"];
ksort($products);
foreach($products as $key => $value){
    echo $key . " " . " => " . $value . " " . " ";
}
echo "<br>";

krsort($products);

foreach($products as $key => $value){
    echo $key . " " . " => " . $value . " " . " ";
}
?>