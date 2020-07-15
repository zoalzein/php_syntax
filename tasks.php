<a href="index.php">Home</a>
<br>
<?php
// 1. Write a logic to calculate the product of the remainders when 17 and 27 are divided by 4
$number1 = 199;
$number2 = 8;
echo "($number1 % 4) X ($number2 % 4) = " . ($number1 % 4) * ($number2 % 4) . "<br>";

//2. Declare two variables and assign them with values 5 and -5. 
//a). Compare if the numbers are equal
//b). Compare if the twice the first number is less than double the second number
//c). Compare if the half the first number is greater than double the second number
//d). Compare if the twice the first number is 4 less than the second number
//e). Compare if the first number is double the half the second number
//f). Compare if 5 less than the first number is 5 more than double the second number
$number1 = 45;
$number2 = 8;
var_dump($number1 == $number2);
echo "<br>";
var_dump((2 * $number1) < (2 * $number2));
echo "<br>";
var_dump(($number1 / 2) > (2 * $number2));
echo "<br>";
var_dump(( 2 * $number1) < ($number2 - 4));
echo "<br>";
var_dump(( $number1 ) > ( 2 * $number2 / 2));
echo "<br>";
var_dump(( $number1 - 5) > ( (2 * $number2) + 5 ));
echo "<br>";