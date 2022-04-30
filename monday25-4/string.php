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
echo "<h2> 1. Write a PHP script to: 

a.	Convert the entered string to uppercase.
b.	Convert the entered string to lowercase.
c.	Make the first letter of the string uppercase.
d.	Make the first letter of each word capitalized
</h2>";
$str= "dua aLSafasfeh";
echo "uppercase of " .$str ." : " .strtoupper($str) ."<br>" ;
echo "lowercase of " .$str ." : " .strtolower($str) ."<br>" ;
echo "uppercase of first letter " .$str ." : " .ucfirst($str) ."<br>" ;
echo "capitalized of " .$str ." : " .ucwords($str) ."<br>" ;

echo " <br>";
echo " <hr>";
?>
<!-- .............................. -->
<?php 
echo "<h2> 2.	Write a PHP script splitting the following numeric string to be a date format. </h2>";
$str = '085119';
echo $str ." ==> " .chunk_split($str,2,":") ."<br>" ;
#echo $str ." ==> " .date("y:m:d", (strtotime($str)));
echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php
echo "<h2> 3.	Write a PHP script to check whether the sentence contains a specific word. </h2>";
$str = "I am a full stack developer at orange coding academy";
echo $str ."<br>";
echo "check 'orange' <br>";
if (strpos($str ,'orange')!== false){
    echo "The word is found";
}
else {
    echo "The word is not found";
}
echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php
echo "<h2> 4.	Write a PHP script to extract the file name from the URL </h2>";
$path = 'www.orange.com/index.php';
$file_name =basename($path);

echo "the file name of 'www.orange.com/index.php' is " .$file_name ."<br>";

echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2> 5.	Write a PHP script to extract the username from the following email address.  </h2>";
$email = 'info@orange.com ';
$username = strstr($email,'@',true);
echo " username from " .$email ."is " .$username;

echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php 
echo "<h2> 6.	Write a PHP script to get the last three characters from the string.  </h2>";
$email = 'info@orange.com';
$lastchar = substr($email,-3);
echo "last three characters from  " .$email ." is " .$lastchar;

echo " <br>";
echo " <hr>";
?>
<!-- ..................................... -->
<?php 
echo "<h2> 7.	Write a PHP script to generate simple random passwords [do not use rand () function] from a given string.  </h2>";
$data='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
$numberofpass = 7;
$randompass = substr(str_shuffle($data), 0, $numberofpass);
echo "random password from '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz' ==> <br>";
echo $randompass;


echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2> 8.	Write a PHP script to replace the first word of the sentence with another word.  </h2>";
$str = 'That new trainee is so genius.';
$output = preg_replace('/That/','Our', $str);
echo $str ."==> <br>";
echo $output ."<br>";

echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2> 9.	Write a PHP script to find the first character that is different between two strings.   </h2>";
$str1 = 'dragonball';
$str2 = 'dragonboll';
$pos = strspn($str1 ^ $str2 , "\0");
echo $str1 ."<br>";
echo $str2 ."<br>";
printf ('First difference between two strings at position %d:" %s vs %s"',$pos , $str1[$pos] , $str2[$pos]);

echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2> 10.	Write a PHP script to put a string in an array, use the (var_dump) to view the array.  </h2>";

$arr = array("Twinkle", "twinkle", "little star");
echo '<pre>'; print_r($arr); echo '</pre>';
#print_r($arr)."<br>";
echo var_dump($arr);

echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2> 11.	Write a PHP script to print the next letter of the inputted letter.   </h2>";
$cha = 'a';
$nextletter = ++$cha;
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($nextletter) > 1) 
{
 $nextletter = $nextletter[0];
 }
echo "chacacter is " .$cha ."<br>";
echo "next letter is " .$nextletter ."<br>";

echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2> 12.	Write a PHP script to insert a string at the specified position in a given string.   </h2>";
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_str = substr_replace($original_string , $string_to_insert .' ' ,$insert_pos,0);
echo $original_string ."==> <br>";
echo $new_str ."<br>";
echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2> 13.	Write a PHP script to remove zeroes from the given number.   </h2>";
$str = '0000657022.24';
$newstr = ltrim($str , '0');
echo $str ."==><br>";
echo $newstr ."<br>";
echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2> 14.	Write a PHP script to remove part of a string.  </h2>";
$str ='The quick brown fox jumps over the lazy dog';

$newstr = str_replace('fox' ," ", $str);
echo $str ."==><br>";
echo $newstr ."<br>";
echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2> 15.	Write a PHP script to remove trailing dashes from a string.   </h2>";
$str ='The quick brown fox jumps over the lazy dog---';

$newstr = str_replace('-' ," ", $str);
echo $str ."==><br>";
echo $newstr ."<br>";
echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2> 16.	Write a PHP script to remove Special characters from the following string. </h2>";
$str ='\"\1+2/3*2:2-3/4*3';
$newstr = str_replace(str_split('\\/:*?"<>|+-'),' ',$str);
echo $str ."==><br>";
echo $newstr ."<br>";
echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2> 17.	Write a PHP script to select first 5 words from the following string.  </h2>";
$str ='The quick brown fox jumps over the lazy dog';
$newstr = implode(' ', array_slice(explode(' ',$str),0,5));
echo $str ."==><br>";
echo $newstr ."<br>";
echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2>18.	Write a PHP script to remove comma(s) from the following numeric string.  </h2>";
$str ='2,543.12';
$newstr = str_replace(',','',$str);
echo $str ."==><br>";
echo $newstr ."<br>";
echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2>19.	Write a PHP script to print letters from 'a' to 'z'.  </h2>";
for ($i = ord('a'); $i<= ord('z'); $i++){
    echo chr($i) ." ";
}
echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->
<?php 
echo "<h2>20. Write a PHP script to get the first word of a sentence.  </h2>";
$str ='The quick brown fox';
$newstr = explode(' ',trim($str));
echo $str ."==><br>";
echo $newstr[0] ."<br>";
echo " <br>";
echo " <hr>";
?>
<!-- ................................... -->



