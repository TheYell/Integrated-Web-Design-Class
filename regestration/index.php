<?php

$servername = "localhost";
$username = "daniell7_aceUser";
$password = "Aceinthehole";
$dbname = "daniell7_aceInTheHole";

$users_status = $_POST['status'];
$users_fname = $_POST['fname'];
$users_lname = $_POST['lname'];
$users_email = $_POST['email'];
$users_phone = $_POST['phone'];
$users_event = $POST['event'];
$users_emergencyName = $_POST['ename'];
$users_emergencyNumber = $_POST['enumber'];
$users_shirtSize = $_POST['shirt'];
$users_gender = $_POST['gender'];
$users_comments = $_POST['comments'];

//connect to database
try
{

  $pdo = new PDO('mysql:host=localhost;dbname=daniell7_aceInTheHole', 'daniell7_aceUser', 'Aceinthehole');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}


catch (PDOException $e)
{
  $error = 'Unable to connect to the database server (root index):' . $e->getMessage();
  include './includes/error.html.php';
  exit();
}


try{
$sql ="
  INSERT INTO `daniell7_aceInTheHole`.`registration` (`id`, `status`, `fname`, `lname`, `email`, `phone`, `event`, `emergencyName`, `emergencyNumber`, `shirtSize`, `gender`, `comments`) 
  VALUES (NULL, '$users_status', '$users_fname', '$users_lname', '$users_email', '$users_phone', '$users_event', '$users_emergencyName', '$users_emergencyNumber', '$users_shirtSize', '$users_gender', '$users_comments');";
}

catch (PDOexception $e) {
    $error = 'Error adding registration' . $e->getMessage();
    include './includes/error.html.php';
    exit();
}

include '../includes/success.html.php';

?>