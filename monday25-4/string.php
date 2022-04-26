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
