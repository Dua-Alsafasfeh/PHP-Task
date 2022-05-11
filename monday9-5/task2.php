<?php
//include the request for user input and the response in the same file, using conditional statements to tell PHP which one to show. For this PHP exercise, rewrite the two files of the previous exercise into one file using an if-else conditional statement.
echo "<title> Task 2 </title>";
if (isset($_POST['submit']) && (!empty($_POST['favcity']))) {

    $favcity = $_POST['favcity'];
    echo "Your favorite city is " . $favcity . ".";
} else {
?>
    <h2>Favorite City</h2>
    <p>Enter Your Favourite City:</p>
    <form action="" method="POST">
        <input type="text" name="favcity" />
        <input type="submit" name="submit" />
    </form>
<?php
}
?>