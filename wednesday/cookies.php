<?php
$value = 'Duaa';
setcookie("user" ,$value , time()+(86400*30) , '/');
 if( isset($_COOKIE['user'])){
     echo "value is " .$_COOKIE['user'];
 }
 //delete cookie 
 #setcookie("user" ,$value , time()-(86400*30));
?>