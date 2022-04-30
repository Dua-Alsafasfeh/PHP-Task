<?php
$value = 'Duaa';
setcookie("user" ,$value , time()+(86400*30) , '/');
 if( isset($_COOKIE['user'])){
     echo "User is " .$_COOKIE['user'];
 }
 //delete cookie 
 #setcookie("user" ,'' , time()-(86400*30), '/');
?>