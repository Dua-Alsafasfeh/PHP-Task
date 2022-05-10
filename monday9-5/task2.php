<?php
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