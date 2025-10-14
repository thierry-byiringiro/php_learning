<?php
    $fr = array("apple","Banana","Cherry");
    // echo $fr[0];
    // echo " ";
    // echo $fr[1] ;

    $arr = [1,2,4,55];
    // echo $arr[2];
    for($i = 0;$i<sizeof($arr);$i++){
        echo $arr[$i];
    }

    $per = array("n" => "hope","age" => 12);
    foreach($per as $key => $value){
        echo $value." ";
    }

    $country = array(
        array("Rwanda" => "Kigali"),
        array("Kenya" => "Nairobi"),
        array("Kenya" => "Dar El salam"),
        array("Burundi" => "Bujumbura"),
        array("Uganda" => "Kampala")
    );
    $c = 0;
        for($j = 0;$j < sizeof($country);$j++){
            foreach($country[$j] as $key => $value){
                echo $c++. " . " .$value. " is capital city of  ". $key. "<br>";
            }
        }
        <form action="" method="post">
        <h1>Enter number  of subjects </h1>
        input:number*4br
        </form>
?>