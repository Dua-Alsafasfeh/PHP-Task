<?php
// include_once 'config.php';
$servername = 'localhost';
$dbusername = 'root';
$password = '';
$database = 'api';

// Create connection
$conn = mysqli_connect($servername, $dbusername, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


header("Content-Type:application/json");





$query = "SELECT * FROM `employees` WHERE emp_id=1";
$result = mysqli_query($conn, $query);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $emplyeeData['emp_id'] = $row['emp_id'];
    $emplyeeData['emp_name'] = $row['emp_name'];
    $emplyeeData['emp_email'] = $row['emp_email'];
    $emplyeeData['emp_email'] = $row['emp_email'];
    $emplyeeData['emp_address'] = $row['emp_address'];
    $emplyeeData['emp_salary'] = $row['emp_salary'];
    $emplyeeData['emp_department'] = $row['emp_department'];
    $response["status"] = "true";
    $response["message"] = "emplyeeData";
    $response["employees"] = $emplyeeData;

    echo json_encode($response);
}

// another way 
// header("Content-type:application/json");
//   include 'config/connect.php';
//   $dsn="mysql:host=localhost;dbname=new1";

//   try {
//       $db= new PDO($dsn,'root','');
//       echo 'connected';
//   } catch (PDOException $er) {
//       echo  'not connected, error : '. $er->getmessage();
//   }

//   $st=$db->prepare("SELECT * FROM employee");
//   $st->execute();
//   $info=$st->fetchAll(PDO::FETCH_ASSOC);


//     echo "<hr>";

//     print(json_encode($info, JSON_PRETTY_PRINT));
exit;