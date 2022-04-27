<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form actio="" method="post">
    Enter URL:
    <input type="text" name="url" id="url" placeholder="search.." required>
    <br><br>
    <input type="button" value="GO" name="go">

</form>
</body>
</html>
<?php
if(isset($_POST['go']) && !empty($_POST['go'])){
    $_url=$_POST['url'];
    header('location: .$_url');
}
?>