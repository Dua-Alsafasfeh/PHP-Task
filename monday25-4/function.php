<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>

<?php 
echo "<h2> 1.	Write a PHP script to check if the inserted number is a prime number  </h2>";
function IsPrime($num){
    if($num === 1 || $num === 0){
        echo "1 and 0 is neither prime nor composite number.<br>";
        }
    for($i=2; $i<$num; $i++){
      if($num % $i == 0){
		   return 0;
		  }
          else{
              return 1;
            }
    }
}
$number = IsPrime(12);
if ($number == 0){
echo 'This is not a Prime Number.<br>';
}else
echo 'This is a Prime Number.<br>';

echo " <br>";
echo " <hr>";
?>
<!-- ........................................... -->
<?php
echo "<h2> 2. Write a PHP script to reverse a string.  </h2>";
    function reverseString($str){
        $revstring = strrev($str);
        return $revstring;
    }
    $str1= " remove ";
    $output = reverseString($str1);
    echo "the reverse string of ".$str1 ."is " .$output .'<br>';
    echo " <br>";
    echo " <hr>";
?>
<!-- ................................................. -->
<?php
echo "<h2> 3. Write a PHP script to check if the all string characters are lower cases  </h2>";
    function lowercase($str){
        if (ctype_lower($str)){
            echo "your string is OK .<br>";
        }
        else{
            echo "your string is not OK .<br>"; 
        }
    }
$str1 ="remove";
lowercase($str1);
echo " <br>";
echo " <hr>";
?>
<!-- ....................... -->
<?php
echo "<h2> 4.	Write a PHP function to swap to variables? </h2>";
function swap($num1, $num2){
    $temp = $num1 ;
    $num1 = $num2;
    $num2 = $temp;
    echo $num1 .'  '. $num2;
}
swap(5,7);
echo " <br>";
echo " <hr>";
?>
<!-- .......................... -->
<?php
echo "<h2> 5.	Write a PHP function to check if a number is an Armstrong number or not ? </h2>";
function armstrong($num){
    $numl= strlen($num);
    $sum = 0;
    $num = (string)$num;
    for ( $i =0 ; $i< $numl ; $i++){
        $sum= $sum + pow((string)$num[$i] , $numl);
    }
    if ((string)$sum == (string)$num){
        return "Yes";
    }
    else{
        return "No";
    }
}
echo "Is 407 Armstrong number? " .armstrong(407);
echo " <br>";
echo " <hr>";
?>
<!-- .......................... -->
<?php
echo "<h2> 6.	Write a PHP function that checks whether a passed string is a palindrome or not?</h2>";
function palindrome($str){
    $revstr = strrev($str);
    if ( $str == $revstr ){
        return "Yes";
    }
    else{
        return "No";
    }
}
echo "Is 'Eva, can I see bees in a cave' a palindrome?" .palindrome("Eva can I see bees in a cave");
echo " <br>";
echo " <hr>";
?>
<!-- .................................. -->
<?php 
echo "<h2> 7. Write a PHP function to remove duplicates from an array ?</h2>";
function remove_duplicate($arr){
    $newarr = array_unique($arr);
    return $newarr;
}
$arr1 = array(2, 4, 7, 4, 8, 4);
$output = remove_duplicate($arr1);
echo "array before: (2, 4, 7, 4, 8, 4) , array after: " ;
print_r($output);
echo " <br>";
echo " <hr>";
?>
