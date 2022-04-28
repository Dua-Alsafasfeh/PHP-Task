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
    Enter URL:
    <input type="text" name="url" id="url" placeholder="search.." required>
    <br><br>
    <button type="submit" value="submit" name="Go">GO</button>
</form>
</body>
</html>
<?php
if(isset($_POST['Go']) && !empty($_POST['Go'])){
    $_url=$_POST['url'];
    header('location: '.$_url);
}
?>