<?php
//requesting input in the first part, and responding in the second, through the magic of PHP's if-else statement. In the first section, give the user an input field and request that they enter a day of the week.
echo "<title> Task 3 </title>";
if(isset($_POST['submit']) && !empty($_POST['day']))
{
   $day = $_POST['day'];
   if ($day == 'Monday'){
       echo 'Laugh on Monday, laugh for danger.';
   }elseif ($day == 'Tuesday') {
    echo 'Laugh on Tuesday, kiss a stranger.';
   }elseif ($day == 'Wednesday') {
   echo 'Laugh on Wednesday, laugh for a letter.';
   }elseif ($day == 'Thursday') {
    echo 'Laugh on Thursday, something better.';
   }elseif ($day == 'Friday'){
    echo 'Laugh on Friday, laugh for sorrow.';
   }elseif ($day == 'Saturday') {
    echo 'Laugh on Saturday, joy tomorrow.';
   }else{
       echo "invalid data";
   }
   echo "<br>";
   echo "<button type='button' name='back'><a href='task3.php'>Back </a></button>";
}else{
    ?>
    <h2>Day of The Week</h2>
<p>Enter a Day of The Week.</p>
<span>the first letter must be capital!</span>
<form action="" method="POST">
    <input type="text" name="day">
    <input type="submit" name="submit">
</form>
<?php
}
?>

