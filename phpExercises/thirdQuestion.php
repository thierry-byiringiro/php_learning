<?php
//creating and accessing nested array elements;
$students = array(
    array("Name" => "John", "Age" => 18,"Grades" => "A"),
    array("Name" => "Jane", "Age" => 19,"Grades" => "B"),
    array("Name" => "NF", "Age" => 20,"Grades" => "C"),
);

for($i = 0;$i < sizeof($students);$i++){
    foreach($students[$i] as $key => $value){
        echo $key . ":" . " ". " => ". $value . " | ";
    }
    echo "<br>";
}

?>