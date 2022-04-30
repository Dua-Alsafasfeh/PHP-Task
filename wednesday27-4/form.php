<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post"> 
    Enter your E-mail : 
    <input type="email" name="email" id="email">
    <br><br>
    Enter password :
    <input type="password" name="pass" id="pass">
    <br><br>
    <input type="submit" value="submit" name="submit">
</form>
<hr>
</body>
</html>

<?php
$email = $_POST["email"];
echo "<h2> Welcome!</h2>";
echo "Your E-mail is : " .$email;
?>