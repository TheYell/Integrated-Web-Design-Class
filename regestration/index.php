<?php

$servername = "localhost";
$username = "daniell7_aceUser";
$password = "Aceinthehole ";
$dbname = "daniell7_aceInTheHole";
$users_status = $_POST['status'];
$users_fname = $_POST['fname'];
$users_lname = $_POST['lname'];
$users_email = $_POST['email'];
$users_comments = $_POST['comments'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `daniell7_aceinthehole`.`registration` (`id`, `status`, `fname`, `lname`, `email`, `comments`) VALUES (NULL, '$users_status',
        '$users_fname', '$users_lname', '$users_email','$users_comments',
        CURRENT_TIMESTAMP);";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

