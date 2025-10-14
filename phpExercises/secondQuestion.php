<?php
//creating an associative array printing each key value on same value
$person = array("Name" => "John", "Age" => 18,"City" => "Kamembe");

    foreach($person as $key => $value){
        echo $key . ": " . $value . "<br>";
    }

?>