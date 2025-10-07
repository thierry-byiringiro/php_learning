<?php
echo "Hello, world";
$name = "Byiringiro Aime Thierry";
$age = 50;
echo "<br>";
echo "My name is ".$name." and I am ".$age." years old";
//displaying float numbers using printf
$float = 10.44;
echo "<br>";
printf("the float is %.2f",$float);
var_dump($float);
echo gettype($float);
$i = 0;

for($i = 0;$i<5;$i++){
    echo"<br>";
    echo $i;
}
    echo"<br>";

    $a = ["A",3,55,"giir"];
    echo "<pre>";
    // echo implode("<br>",$a);
    echo json_encode($a);
    echo "</pre>";
?>