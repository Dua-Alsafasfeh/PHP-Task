<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>3.Create a simple HTML form and accept the user’s name and display the name through PHP echo statement.</h3>
    <form method = 'post'>
        Enter your name : <input type = "text" name= "name">
        <br><br>
</body>
</html>

<?php
$name = $_POST['name'];
echo "Welcome ".$name ;
?>

