<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="post">
        <h2>To Do List</h2>
        <input type="text" name="task" id="task">
        <button type="submit" name="submit">Add</button>
    </form>
    </div>
    
</body>
</html>

<?php
session_start();
$_SESSION['tasks'] .= $_POST['task'] .",";
// echo $_SESSION['tasks'] ;
$str = explode( "," , $_SESSION['tasks']);
for ($i=0; $i < count($str) ; $i++) { 
    echo "<input type='checkbox' name='' id=''> " .$str[$i] ."<br>";
}
// session_unset();
?>
