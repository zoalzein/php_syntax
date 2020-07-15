<a href="index.php">Home</a>
<br>
<?php
$number1 = 1;
$number2 = 2;
echo "$number1 + $number2 = " . ($number1 + $number2) . "<br>";
$first_name = "Zeinab Omar";
$last_name = "Zein";
$full_name = $first_name . " " . $last_name;
echo $full_name . "<br>";
echo ($number1 + $number2) . "<br>";
echo ($number1 - $number2) . "<br>";
echo ($number1 * $number2) . "<br>";
echo ($number2 / $number1) . "<br>";
echo ($number1 - $number2 * $number2 + $number1 / $number2) . "<br>";
$firstname = "Hashim Omar";
$lastname = "Zein";
echo $firstname . " " . $lastname . "<br>";
$number2 = 7;
echo ($number2 % 3) . "<br>";
var_dump($number1 != 1 || $number1 > $number2);
if (($number1 == $number2)) {
    $number1 = -15;
    $number2 = 20;
}
if (($number1 < $number2)) {
    $number1 = 0;
    $number2 = 0;
}
if (($number1 > $number2)) {
    $number1 = 1;
    $number2 = 1;
}
echo $number1 . " " . $number2;
