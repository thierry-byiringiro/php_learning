<?php
/*
24RP07221
Aime Thierry Byiringiro
Apply PHP Functions
*/
?>

<?php
/*
1.Firstly, functions are block of re-usable codes that can be called anywhere in your program and also they are easy to maintain. So, the main reason we need the functions in PHP is for preventing always writing same codes anywhere in the program when you can only have them one time and call them in the time that you need them.
*/
?>

<?php
/*
2.myFunc();
*/
?>

<?php
    function calculateArea($width,$length){
        echo "The area of ".$width. " and"." ".$length. " is " . $width * $length; 
    }
  calculateArea(5,4);
?>
<?php
/*
4.firstly I’ll start with by reference and then after by value.
*/
?>
<?php
function byReference(&$number) {
    $number++; 
}
$a = 5;
echo "Before function call: $a\n";
byReference($a);
echo "After function call: $a\n";
?>
<?php
/*
And by value 
*/
?>
<?php
function byReference($number) {
    $number++; 
}
$a = 5;
echo "Before function call: $a\n";
byReference($a);
echo "After function call: $a\n";
?>
<?php
/*
“So in short we use an ampersand to pass by reference as by the value we don’t and also php default set’s to pass by value”
*/
?>

<?php
/*
5.
*/
?>
<?php
function useDefaultValue($nu = 4) {
    echo $nu; 
}
useDefaultValue(); // 4
useDefaultValue(3); // 3
?>
<?php
/*
6.A recursive function is a function that  calls it self until it meets a certain or the specified condition in the program and that is called BASE case if it is not provided our function would call itself infinitely.the below example shows how to check if a number is odd or even using recursive function.
*/
?>
<?php
function evenOrOdd($n){
    // Base case 1: if the number becomes 0, it's even
    if($n === 0) return "Even";

    // Base case 2: if the number becomes 1, it's odd
    if($n === 1) return "Odd";
    // Recursive step: reduce the number by 2 
    return evenOrOdd($n - 2);
}

// Call the function and print the result
echo evenOrOdd(8); // Output: Even
?>
<?php
/*
7. PHP built-in functions are ready-made functions that come with PHP so you don't have to write them yourself.
________________________________________
20 string functions
*/
?>

<?php
/*
1.	strlen
*/
?>
<?php
echo strlen("Hello");
?>
<?php
/*
Counts characters. Output: 5.
*/
?>

<?php
/*
2.	strcmp
*/
?>
<?php
echo strcmp("apple","banana");
?>
<?php
/*
Compares two strings (0 if same, <0 or >0 otherwise). Negative here because "apple" < "banana".
*/
?>

<?php
/*
3.	strcasecmp
*/
?>
<?php
echo strcasecmp("Hello","hello");
?>
<?php
/*
Case-insensitive compare (0 means equal ignoring case).
*/
?>

<?php
/*
4.	strpos
*/
?>
<?php
echo strpos("I love PHP","PHP");
?>
<?php
/*
Finds first position of substring (0-based). Returns position (here 7).
*/
?>

<?php
/*
5.	strrpos
*/
?>
<?php
echo strrpos("bananas","a");
?>
<?php
/*
Finds last position of substring (here 5).
*/
?>

<?php
/*
6.	substr
*/
?>
<?php
echo substr("abcdef",2,3);
?>
<?php
/*
Extracts part of a string. Here returns cde.
*/
?>

<?php
/*
7.	str_replace
*/
?>
<?php
echo str_replace("world","PHP","hello world");
?>
<?php
/*
Replaces substring(s). Returns hello PHP.
*/
?>

<?php
/*
8.	str_ireplace
*/
?>
<?php
echo str_ireplace("WORLD","PHP","Hello world");
?>
<?php
/*
Case-insensitive replace. Also returns Hello PHP.
*/
?>

<?php
/*
9.	strtoupper
*/
?>
<?php
echo strtoupper("hello");
?>
<?php
/*
Makes all letters uppercase: HELLO.
*/
?>

<?php
/*
10.	strtolower
*/
?>
<?php
echo strtolower("HELLO");
?>
<?php
/*
Makes all letters lowercase: hello.
*/
?>

<?php
/*
11.	ucfirst
*/
?>
<?php
echo ucfirst("hello world");
?>
<?php
/*
Uppercases first character only: Hello world.
*/
?>

<?php
/*
12.	ucwords
*/
?>
<?php
echo ucwords("hello world from php");
?>
<?php
/*
Uppercases first letter of each word: Hello World From Php.
*/
?>

<?php
/*
13.	trim
*/
?>
<?php
echo trim("   hello   ");
?>
<?php
/*
Removes spaces (or specified chars) from both ends: hello.
*/
?>

<?php
/*
14.	ltrim
*/
?>
<?php
echo ltrim("   left");
?>
<?php
/*
Removes spaces from the left only: left.
*/
?>

<?php
/*
15.	rtrim
*/
?>
<?php
echo rtrim("right   ");
?>
<?php
/*
Removes spaces from the right only: right.
*/
?>

<?php
/*
16.	explode
*/
?>
<?php
print_r(explode(",", "a,b,c"));
?>
<?php
/*
Splits a string into an array by delimiter. Returns Array ( [0] => a [1] => b [2] => c ).
*/
?>

<?php
/*
17.	implode
*/
?>
<?php
echo implode("-", ["2025","10","28"]);
?>
<?php
/*
Joins array elements into a string with glue. Returns 2025-10-28.
*/
?>

<?php
/*
18.	str_split
*/
?>
<?php
print_r(str_split("hey"));
?>
<?php
/*
Splits into array of characters: Array ( [0] => h [1] => e [2] => y ).
*/
?>

<?php
/*
19.	strrev
*/
?>
<?php
echo strrev("desserts");
?>
<?php
/*
Reverses the string: stressed.
*/
?>

<?php
/*
20.	str_pad
*/
?>
<?php
echo str_pad("42",5,"0",STR_PAD_LEFT);
?>
<?php
/*
Pads a string to a certain length. Here returns 00042.
*/
?>

<?php
/*
21.	str_repeat
*/
?>
<?php
echo str_repeat("ha",3);
?>
<?php
/*
Repeats a string the given number of times. Returns hahaha.
*/
?>

<?php
/*
________________________________________
20 math functions
*/
?>

<?php
/*
1.	abs
*/
?>
<?php
echo abs(-7.2);
?>
<?php
/*
Absolute value: 7.2.
*/
?>

<?php
/*
2.	ceil
*/
?>
<?php
echo ceil(3.1);
?>
<?php
/*
Rounds up to nearest integer: 4.
*/
?>

<?php
/*
3.	floor
*/
?>
<?php
echo floor(3.9);
?>
<?php
/*
Rounds down: 3.
*/
?>

<?php
/*
4.	round
*/
?>
<?php
echo round(3.456,2);
?>
<?php
/*
Rounds to given precision: 3.46.
*/
?>

<?php
/*
5.	min
*/
?>
<?php
echo min(3,7,1);
?>
<?php
/*
Returns smallest value: 1.
*/
?>

<?php
/*
6.	max
*/
?>
<?php
echo max(3,7,1);
?>
<?php
/*
Returns largest value: 7.
*/
?>

<?php
/*
7.	pow
*/
?>
<?php
echo pow(2,5);
?>
<?php
/*
Power function: 2^5 = 32.
*/
?>

<?php
/*
8.	sqrt
*/
?>
<?php
echo sqrt(16);
?>
<?php
/*
Square root: 4.
*/
?>

<?php
/*
9.	rand
*/
?>
<?php
echo rand(1,6);
?>
<?php
/*
Random integer between min and max (simulates dice). Output varies.
*/
?>

<?php
/*
10.	mt_rand
*/
?>
<?php
echo mt_rand(100,999);
?>
<?php
/*
Faster/better random integer between given bounds. Output varies.
*/
?>

<?php
/*
11.	fmod
*/
?>
<?php
echo fmod(7,2.5);
?>
<?php
/*
Floating-point remainder: 2.0.
*/
?>

<?php
/*
12.	deg2rad
*/
?>
<?php
echo deg2rad(180);
?>
<?php
/*
Converts degrees to radians: 3.1415926535898...
*/
?>

<?php
/*
13.	rad2deg
*/
?>
<?php
echo rad2deg(pi()/2);
?>
<?php
/*
Converts radians to degrees: 90.
*/
?>

<?php
/*
14.	sin
*/
?>
<?php
echo sin(pi()/6);
?>
<?php
/*
Sine of an angle in radians: 0.5.
*/
?>

<?php
/*
15.	cos
*/
?>
<?php
echo cos(0);
?>
<?php
/*
Cosine of 0: 1.
*/
?>

<?php
/*
16.	tan
*/
?>
<?php
echo tan(pi()/4);
?>
<?php
/*
Tangent of 45 degrees (pi/4): 1.
*/
?>

<?php
/*
17.	log
*/
?>
<?php
echo log(10);
?>
<?php
/*
Natural logarithm (base e) of 10: about 2.302585092994.
*/
?>

<?php
/*
18.	exp
*/
?>
<?php
echo exp(1);
?>
<?php
/*
Exponential e^x. e^1 = 2.718281828459.
*/
?>

<?php
/*
19.	hypot
*/
?>
<?php
echo hypot(3,4);
?>
<?php
/*
Calculates sqrt(xx + yy). For 3 and 4 returns 5.
*/
?>

<?php
/*
20.	intdiv
*/
?>
<?php
echo intdiv(7,2);
?>
<?php
/*
Integer division (7 divided by 2) returns 3.
*/
?>
