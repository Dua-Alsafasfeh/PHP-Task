<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 1</title>
</head>

<body>
    <!-- Create two separate files. The first will contain a form with one input field asking for the user's favorite city.
    The second file will contain PHP code to process the user's response.  -->
    <div>
        <h2>Favorite City</h2>

        <form action="result.php" method="POST">
            <p>Enter Your Favourite City:</p>
            <input type="text" name="city">
            <br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>