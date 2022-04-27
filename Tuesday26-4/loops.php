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
    <title>PHP-loops Tasks</title>
</head>
<body>
<h1>Loops Tasks</h1>
    <hr style=" width:25%">
</body>
</html>

<?php
echo "<h2> 1.Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no dash (-) at the start and end position. </h2>";
for ( $i =1 ; $i <= 10 ; $i++ ){
    if ($i < 10){
        echo $i ." - ";
    }else{
        echo $i;
    }
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 2.Create a script using a for loop to add all the integers between 0 and 30 and display the total.  </h2>";
$total = 0;
for ( $i =0 ; $i <= 30 ; $i++ ){
   $total += $i ;
}
echo "The total of integers between 0 and 30 = ".$total ;
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 3.Create a script to generate the following pattern, using the nested for loop.
A A A A A 
A A A B B 
A A C C C 
A D D D D 
E E E E E
</h2>";
$str = 'A';
for ($i = 1 ; $i <= 5 ; $i++ ){
    for ( $j = 5-$i ; $j>0 ; $j--){
        echo ' A ';
    }
    for ( $k = 1 ; $k <= $i ; $k++){
        echo $str ." "  ;
    }
    echo "<br>";
    $str++;
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 4.Create a script to generate the following pattern, using the nested for loop. 
1 1 1 1 1 
1 1 1 2 2 
1 1 3 3 3 
1 4 4 4 4 
5 5 5 5 5
</h2>";
$num = 1;
for ( $i = 1 ; $i <= 5 ; $i++ ){
    for ($j= 5-$i ; $j >0 ; $j--) { 
        echo " 1 ";
    }
    for ($k = 1; $k <= $i ; $k++) { 
        echo $num ." ";
    }
    echo "<br>";
    $num++;
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2> 5.Create a script to generate the following pattern, using the nested for loop. 
1 0 0 0 0 
0 2 0 0 0 
0 0 3 0 0 
0 0 0 4 0 
0 0 0 0 5
</h2>";
$num = 1;
for ( $i = 1 ; $i <= 5 ; $i++ ){
    for ($j= 1 ; $j <= $i ; $j++) { 
        if ($j == $i){
            echo $num ." " ;
            $num++;
        }else{
            echo " 0 ";
        }
    }
    for ($k = 5-$i; $k >0 ; $k--) { 
        echo " 0 ";
    }
    echo "<br>";
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2>6.Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number.  </h2>";

$num = 5;
$mul = 1;
for ( $i= 1; $i <= $num ; $i++){
    $mul = $i * $mul ;
}
echo " foctoria of " .$num ." = " .$mul;
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2>7.Write a program to calculate and print the Fibonacci sequence using a for loop.
Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on.
 </h2>";

$n1 =0;
$n2 = 1;
echo $n1 .", ";
echo $n2 .", ";
$numofterm = 10;
$nextTerm = $n1 + $n2 ;
for ( $i= 0; $i <= $numofterm; $i++){
    echo $nextTerm .", " ;
    $n1 = $n2 ;
    $n2 = $nextTerm;
    $nextTerm = $n1 + $n2 ;
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2>8.Write a program which will count the 'c' characters in the text Orange Coding Academy. 
 </h2>";
$text = "orange coding academy";
$char = 'c';
$count = 0;
for ( $i = 0; $i< strlen($text); $i++){
    if (substr($text , $i , 1) == $char){
        $count+= 1;
    }
}
echo "count of " .$char ." in " .$text ." = " .$count ;
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2>9.	Write a PHP script that creates the following table using for loops. Add cellpadding =3px and cell spacing =0px to the table tag. </h2>"; 
// 1 * 1 = 1	1 * 2 = 2	1 * 3 = 3	1 * 4 = 4	1 * 5 = 5
// 2 * 1 = 2	2 * 2 = 4	2 * 3 = 6	2 * 4 = 8	2 * 5 = 10
// 3 * 1 = 3	3 * 2 = 6	3 * 3 = 9	3 * 4 = 12	3 * 5 = 15
// 4 * 1 = 4	4 * 2 = 8	4 * 3 = 12	4 * 4 = 16	4 * 5 = 20
// 5 * 1 = 5	5 * 2 = 10	5 * 3 = 15	5 * 4 = 20	5 * 5 = 25
// 6 * 1 = 6	6 * 2 = 12	6 * 3 = 18	6 * 4 = 24	6 * 5 = 30

echo "<table style='border: 1px ;cellpadding =3px ; cell spacing =0px'>";
for ( $i= 1 ; $i <=6; $i++){
    echo "<tr>";
    for ( $j = 1 ;$j <=5; $j++){
        echo "<td style ='padding: 5px; border: 1px solid;'> $i * $j = " .$i*$j ." " ."</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2>10.	Write a PHP program that repeats integers from 1 to 50. For multiples of three, print 'Fizz' instead of the number, and for multiples of five print 'Buz'. For numbers that are multiples of both three and five, print 'FizzBuzz'.
</h2>";
for ( $i =1 ; $i <= 50; $i++){
    if (($i % 3 == 0 ) && ($i % 5 == 0 )){
        echo " FizzBuzz ";
    }elseif ($i % 3 == 0 ) {
        echo " Fizz ";
    }elseif ($i % 5 == 0 ) {
        echo " Buzz ";
    }else {
        echo $i ." ";
    }
}
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
echo "<h2>11.Write a PHP program to generate and display the first n lines of a Floyd triangle
</h2>";
$n = 5; 
echo "n = " .$n ."<br>";
$count = 1;
for ($i = $n; $i > 0; $i--) 
{
  for ($j = $i; $j < $n + 1; $j++) 
   {
     printf("%4s", $count);
     $count++;
   } 
	echo "<br>";
   }
echo "<br>";
echo "<hr>";
?>
<!-- /////////////////////////// -->
<?php
// echo "<h2> 12.Write a PHP program to print the following pattern. 
// </h2>";
// $alpha = range('A', 'E');
// $k = 0;
// for($i=1; $i<= 5; $i++)
// {
//  for($j=1; $j< 5-$i; $j++){
//      echo "&nbsp;&nbsp;";
//   #echo " ";
//  }
//  for($k=0; $k<=$i; $k++){
//      echo "<div>".$alpha[$k]."</div>"; 
//  } 
//  echo "<br>";
// }
// echo "<br>";
// echo "<hr>";
?>