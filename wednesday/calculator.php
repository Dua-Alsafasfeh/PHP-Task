<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>

<body>
    <form action="" method="post">
        <p>calculator</p>
        Enter First Number :<input type="text" name="fnum" id="fnum" value="" placeholder="Nmuber 1" required>
        <br><br>
        Enter second Number :<input type="text" name="snum" id="snum" value="" placeholder="Nmuber 2" required>
        <br><br>
        choose operation:
        <input type="submit" name="operator" value="+">
        <input type="submit" name="operator" value="*">
        <input type="submit" name="operator" value="-">
        <input type="submit" name="operator" value="/">
        <br>
    </form>

</body>

</html>
<?php
if (isset($_POST["operator"]) && (!empty($_POST["operator"]))) {
    $fnum = $_POST["fnum"];
    $snum = $_POST["snum"];
    if (is_numeric($fnum) && is_numeric($snum)) {
        $operator = $_POST["operator"];
        if ($operator == "+") {
            echo "Result = " . ($fnum + $snum);
        } elseif ($operator == "-") {
            echo "Result = " . ($fnum - $snum);
        } elseif ($operator == "*") {
            echo "Result = " . ($fnum * $snum);
        } elseif ($operator == "/") {
            echo "Result = " . ($fnum / $snum);
        }
    } else {
        echo "<br> You must Enter Number";
    }
}
?>