<?php
if (isset($_POST['submit']) && !empty($_POST['day'])) {
    $day = $_POST['day'];
    switch ($day) {
        case 'Monday':
            echo 'Laugh on Monday, laugh for danger.';
            break;
        case 'Tuesday':
            echo 'Laugh on Tuesday, kiss a stranger.';
            break;
        case 'Wednesday':
            echo 'Laugh on Wednesday, laugh for a letter.';
            break;
        case 'Thursday':
            echo 'Laugh on Thursday, something better.';
            break;
        case 'Friday':
            echo 'Laugh on Friday, laugh for sorrow.';
            break;
        case 'Saturday':
            echo 'Laugh on Saturday, joy tomorrow.';
            break;
        
        default:
            echo "invalid data";
            break;
    }
    echo "<br>";
    echo "<button type='button' name='back'><a href='task4.php'>Back </a></button>";
} else {
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