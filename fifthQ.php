<?php
//arthimetic operators
$x = 15;
$y = 4;
$sum = $x + $y;
$sub = $x - $y;
$mult = $x * $y;
$div = $x / $y;
$mod = $x % $y;
printf("Addition of %d",$sum);
echo "<br>";
printf("Subtraction is %d",$sub);
echo "<br>";
printf("Multiplication is %d",$mult);
echo "<br>";
printf("division is %.2f",$div);
echo "<br>";
printf("Modulus is %d",$mod);

//a - using assignment operator
$a = 10;
$a += 10;
$a -= 10;
$a *= 10;
$a /= 10;
echo "<br>";
echo "using the assignment operator on the variable". $a;

//b - demonstrating betwise operator
$p = 6;
$o = 3;
$and = $p & $o;
$or = $p | $o;
$carot = $p ^ $o;
echo "<br>";
echo $and;
echo "<br>";
echo $or;
echo "<br>";
echo $carot;

//c - using comparison operators
echo "<br>";
echo ($o > $p) === true ? "True" : 'False';
echo "<br>";
echo ($o < $p) === true ? "True" : 'False';
echo "<br>";
echo ($o == $p) === true ? "True" : 'False';
echo "<br>";
echo ($o !== $p) === true ? "True" : 'False';


//d - using incrementing and decrementing

echo "Pre-Increment".++$x;
echo "<br>";
echo "Post-Increment ".$x++;
echo "<br>";
echo "Pre-Decrement ".--$x;
echo "<br>";
echo "Post-Decrement ".$x--;

//e - 
?>