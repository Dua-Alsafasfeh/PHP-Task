<?php

class names 
{
  public  $name1 = "all";
  public $name2 = "mona";
  public $name3 = "mohammed";
    function call_our_names()
    {
        return $this->name1." ".$this->name2." ".$this->name3." ";

    }


    function call_random_name($x,$y,$z)
    {
        $num = rand(0,3);

        switch($num)
        {
            case 1:
                return $x;
                break;
            case 2:
                return $y;
                break;
            case 3:
                return $z;
                break;        
        }


    }


}

$name = new names();
echo $name->call_our_names();

if(isset($_POST['submit']))
{
$x= $_POST['one'];
$y= $_POST['two'];
$z= $_POST['three'];

    echo $name->call_random_name($x,$y,$z);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br><br><br><br><br>
    <form  method="post">
<input type="text" name="one" value="name">
<br>
<input type="text" name="two" value="name">
<br>
<input type="text" name="three" value="name">
<input type="submit" value="submit" name="submit">

    </form>
</body>
</html>