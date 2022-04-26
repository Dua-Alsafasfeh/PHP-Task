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
echo "<h2> 1.	Write a script to generate the following paragraph  </h2>";
$color = array('red', 'green','white');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[0] carpet, the $color[1] lawn, the $color[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php
echo "<h2> 2. colors = array('white', 'green', 'red') 
Write a PHP script that will display the colors as unordered list
  </h2>";
$colors = array('white', 'green', 'red');
sort($color);
echo "<ul>";
foreach ($color as $y){
    echo "<li>$y</li>";
}
echo "</ul>";
echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php
echo "<h2> 3. Create a PHP script to displays the capital and country name from the array 'cities'. Sort the list by the capital of the country. 
  </h2>";
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

asort($cities);
echo "<ul>";
foreach($cities as $country => $capital){
    echo "<li>"."The capital of ".$country ."is " .$capital ."</li>" ;
}
echo "</ul>";
echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php
echo "<h2> 4.	'color' = array (4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to display the first element of the above array. 
 </h2>";

$color =  array (4 => 'white', 6 => 'green', 11=> 'red');
$output = reset($color);
echo "the first element is ".$output;
echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php
echo "<h2> 5.Write a PHP script that inserts a specific new item in an array in any position.
 </h2>";

$arr = array ('1','2','3','4','5');
echo "the original array is <br>";
foreach($arr as $x){
    echo "$x ";
}
echo "<br>";
$newitem = '$';
array_splice($arr , 3, 0, $newitem);
echo "After inserting '$ array is : <br>" ;
foreach($arr as $x){
    echo "$x ";
}
echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php
echo "<h2>6.	Write a PHP script to sort the following associative array depending on the key value [asc] :
 </h2>";
 $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
 asort($fruits);
 foreach($fruits as $key => $value){
     echo "$key = $value <br>";
 }
echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php
echo "<h2>7.	Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures
 </h2>";

 $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
 $temp_array = explode(',', $month_temp);
 $tot_temp = 0;
 $temp_array_length = count($temp_array);
 foreach($temp_array as $temp)
 {
  $tot_temp += $temp;
 }
  $avg_high_temp = $tot_temp/$temp_array_length;
  echo "Average Temperature is : ".$avg_high_temp." <br>"; 
 sort($temp_array);
 echo " List of five lowest temperatures :";
 for ($i=0; $i< 5; $i++)
 { 
 echo $temp_array[$i].", ";
 }
 echo "<br>";
 echo "List of five highest temperatures :";
 for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
 {
 echo $temp_array[$i].", ";
 }
echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php
echo "<h2>	8.	Write a PHP program to merge the following two arrays
array1 = array(color => red, 2, 4);
array2 = array(a, b, color => green, shape => trapezoid, 4);
 </h2>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$output = array_merge($array1, $array2);
print_r($output);

echo " <br>";
echo " <hr>";

?>
<!-- ................................. -->
<?php
echo "<h2>9.	Write a PHP function to change the following array's and convert all the strings to upper case. 
colors = array(red,blue, white,yellow)</h2>";

$colors = array("red","blue", "white","yellow");

$output = array_map('strtoupper', $colors);
print_r($output);

echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php
echo "<h2>10.	Write a PHP function to change the following array's and convert all the strings to lower case. 
colors = array(RED,BLUE, WHITE,YELLOW)</h2>";

$colors = array("RED","BLUE", "WHITE","YELLOW");

$output = array_map('strtolower', $colors);
print_r($output);

echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php
echo "<h2>11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.</h2>";
$arr = array ( );
for ($i =200 ; $i<= 250 ; $i++){
    if ($i % 4 == 0){
        array_push($arr , $i);
    }
}
#print_r($arr);
echo $arr[0];
for($i=1; $i<count($arr); $i++){
    echo " , ".$arr[$i];
}
echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php
echo "<h2>12.	Write a PHP script to get the shortest/longest string length from an array.</h2>";
$words =  array("abcd","abc","de","hjjj","g","wer");
$output = array_map('strlen',$words);
echo "The shortest array length is " .min($output) ."." ."The longest array length is " .max($output);
echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php
echo "<h2>13.	Write a PHP script to generate unique random 10 numbers within a specific range.</h2>";
$rangeNum = range(11 , 20);
shuffle($rangeNum);
for ($i = 0 ; $i < 10 ; $i++){
    echo $rangeNum[$i] ." ";
}
echo " <br>";
echo " <hr>";
?>
<!-- ................................. -->
<?php
echo "<h2>14.	Write a PHP script that returns the lowest integer in the array  that is not 0. </h2>";
$array1 = array( 2, 0, 10, 12, 6);
foreach($array1 as $value){
    if ($value != 0){
        $thelowest = $value;
        break ;
    }
}
foreach($array1 as $value){
    if($value > 0 && $value < $thelowest){
        $thelowest = $value;
    }
}
echo "the lowest integer = " .$thelowest;
echo " <br>";
echo " <hr>";
?>
