<?php
//create an array, print it to the browser, then ask the user to add to it.

echo "<title> Task 6 </title>";
echo "<h2>Modes of Transportation</h2>";

echo "Travel takes many form, whether across town, across the country, or around the world. <br/>";
echo "Here's a list of some common modes of transportation: <br/> <br/>";

if (empty($_POST['userInput'])) {
    $arr1 = array('Automobile', 'Jet', 'Ferry', 'Subway');
    $textLabel = "<br/>Have something to add? <br/>(Please separate entries with a comma): <br/>";
} else {                                                        //retrieve the users input as well as our
    $tempString1 = explode(',', $_POST['transModeArray']);        //storage array from submitted form.
    $tempString2 = explode(',', $_POST['userInput']);            //convert the comma separated string from
    $arr1 = array_merge($tempString1, $tempString2);        //the user input, and the storage
    $textLabel = "<br/> Add more?<br/>";                        //array sent with it, and join them.
}
foreach ($arr1 as $transportMode)
    echo "<li>$transportMode</li>";        //show everything we have from our storage array
$tempString1 = implode(',', $arr1);    //now pack it up, ready for attachment with the form.

?>
<form action="" method="post">
    <?php echo "$textLabel"; ?>
    <input type="text" name="userInput" maxlength="500">
    <input type="hidden" name="transModeArray" value="<?php echo "$tempString1"; ?>"> <br>
    <input type="submit" value="Go!">
</form>