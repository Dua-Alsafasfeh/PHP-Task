<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>7. Write a PHP script, which changes the color of the first character of a word.
Sample string: PHP Tutorial.</h3>
</body>
</html>

<?php
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:blue;">\1</span>',$text);
echo $text;
?>