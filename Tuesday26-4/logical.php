<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: #FAD9E6;
        }
        h1{
            text-align: center;
        }
        h2{
            color: #46244C;
        }
        hr{
            color: #243D25;
        }
    </style>
    <title>PHP-logical Tasks</title>
</head>
<body>
    <h1>logical statements Tasks</h1>
    <hr style=" width:25%">
    
</body>
</html>
<?php
echo "<h2> 1.	Write a PHP script to see if the specified year is a leap year or not.</h2>";
$year = 2013;
if (($year % 4 == 0) && ($year % 100 == 0) | ($year % 400 ==0)){
    echo $year ." is a leap year";
}
else{
    echo $year ." is not a leap year";
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.</h2>";
$temp = 27;
if ($temp < 20){
    echo "temperature is ".$temp ." => The season is winter";
}
else{
    echo "temperature is ".$temp ." => The season is summer";
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.</h2>";
$firstinteger = 2;
$secondinteger = 2;
if ($firstinteger == $secondinteger){
    $sum = ($firstinteger * $secondinteger) * 3;
    echo "( ".$firstinteger ." * " .$secondinteger .")"." * 3" ." = " .$sum; 
}
else{
    $sum = $firstinteger + $secondinteger ;
    echo $firstinteger ." + " .$secondinteger ." = " .$sum;
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false</h2>";
$firstinteger = 10;
$secondinteger = 10;
if ($firstinteger + $secondinteger == 30){
    $sum = $firstinteger + $secondinteger;
    echo $firstinteger ." + " .$secondinteger." = " .$sum; 
}
else{
    echo "firstinteger = ".$firstinteger .", secondinteger = " .$secondinteger ." => false";
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 5.	Write in PHP script to check if the given positive number is a multiple of 3.</h2>";
$number= 20;
if (($number > 0 )&& ($number % 3 == 0)){
    echo $number ." ; true "; 
}
else{
    echo $number ." ; false ";
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.</h2>";
$number= 50;
if (($number >= 20 )&& ($number <= 50)){
    echo $number ." ; true "; 
}
else{
    echo $number ." ; false ";
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 7.	Write PHP script to find the largest number between the three integers</h2>";
$num1= 1;
$num2= 5;
$num3= 9;
echo $num1 ." , " .$num2 ." , ".$num3 ." =>  ";
if( $num1 > $num2){
    if( $num1 > $num3){
        echo $num1 ." is the largest.";
    }
    else{
        echo $num3 ." is the largest.";
    }
}elseif ( $num2 > $num3){
    echo $num2 ." is the largest."; 
}else{
    echo $num3 ." is the largest.";
    }
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 8.	Write PHP script to calculate the monthly electricity bill according to these rules 
a.	For first 50 units - 2.50 JOD/Unit
b.	For next 100 units - 5.00 JOD/Unit
c.	For next 100 units - 6.20 JOD/Unit
d.	For units above 250 - 7.50 JOD/Unit
</h2>";
$units = 50;
if ($units <= 50){
    $bill = $units * 2.50 ;
    echo $units ." => bill =  " .$bill;
}elseif (($units > 50) && ($units <= 100)) {
    $first_bill = 50 * 2.50 ;
    $remain_units = $units - 50 ;
    $bill = $first_bill + ($remain_units * 5.00);
    echo $units ." => bill =  " .$bill; 
}elseif (($units > 100) && ( $units <= 200)) {
    $previous_bill = (50 * 2.50) + (100 * 5.00);
    $remain_units = $units - 150 ;
    $bill = $previous_bill + ($remain_units * 6.20);
    echo $units ." => bill =  " .$bill;
}else{
    $previous_bill = (50 * 2.50) + (100 * 5.00) + ( 100 * 6.20);
    $remain_units = $units - 250 ;
    $bill = $previous_bill + ($remain_units * 7.50);
    echo $units ." => bill =  " .$bill;
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2>9. Write php script to make a calculator, the calculator should contain the four main operations </h2>";
$num1= 20;
$num2= 40;
$operation = 'mul';
if ( $operation == 'add'){
    $addition = $num1 + $num2 ;
    echo $num1 ." " ."+" ." " .$num2 ." = " .$addition;
}elseif ($operation == 'sub') {
    $Subtraction = $num1 - $num2 ;
    echo $num1 ." " ."-" ." " .$num2 ." = " .$Subtraction;
}elseif ($operation == 'mul') {
    $Multiplication = $num1 * $num2 ;
    echo $num1 ." " ."*" ." " .$num2 ." = " .$Multiplication;
}elseif ($operation == 'div') {
    $Division = $num1 / $num2;
    echo $num1 ." " ."/" ." " .$num2 ." = " .$Division;
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 10.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18. </h2>";
$age = 15;
if ( $age < 18){
    echo $age ." => You ara not eligible to vote";
}else{
    echo $age ." => You are eligible to vote";
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 11.	Write php script  to check whether a number is positive, negative or zero </h2>";
$num = -60;
if ( $num < 0){
    echo $num ." is negative.";
}elseif ($num == 0) {
    echo $num ." is zero ";
}elseif ($num > 0) {
    echo $num ." is positive ";
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject  </h2>";
$scorearr = array(60,86,95,63,55,74,79,62,50);
$score = 0;
for ($i = 0 ; $i < count($scorearr); $i++){
    $score += $scorearr[$i];
}
$average = $score / (count($scorearr));
if ( $average < 60){
    echo $average ." : F";
}elseif ($average < 70) {
    echo $average ." : D";
}elseif ($average < 80) {
    echo $average ." : C";
}elseif ($average  < 90) {
    echo $average ." : B";
}elseif ($average  < 100) {
    echo $average ." : A";
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->

