<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=daniell7_aceInTheHole', 'daniell7_aceUser', 'Aceinthehole');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the Ace In The Hole database server:' . $e->getMessage();
    include '../includes/error.html.php';
    exit();
}
    
if(isset($_POST['fname']) and ($_POST['honeypot'] == ''))
{
    //these variables will be used in Thankyou page
    //$honeypot = $_POST['honeypot'];
    $status = $_POST['status'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event = $_POST['event'];
    $emergencyName = $_POST['ename'];
    $emergencyNumber = $_POST['enumber'];
    $shirtSize = $_POST['shirt'];
    $gender = $_POST['gender'];
    $comments = $_POST['comments'];
    
    try
    {   //database name = :variable name
        $sql = 'INSERT INTO registration SET
            status = :status,
            fname = :fname,
            lname = :lname,
            email = :email,
            phone = :phone,
            event = :event,
            emergencyName = :ename,
            emergencyNumber = :enumber,
            shirtSize = :shirt,
            gender = :gender,
            comments = :comments';
        $s = $pdo->prepare($sql);
        $s->bindValue(':status', $_POST['status']);
        $s->bindValue(':fname', $_POST['fname']);
        $s->bindValue(':lname', $_POST['lname']);
        $s->bindValue(':email', $_POST['email']);
        $s->bindValue(':phone', $_POST['phone']);
        $s->bindValue(':event', $_POST['event']);
        $s->bindValue(':ename', $_POST['ename']);
        $s->bindValue(':enumber', $_POST['enumber']);
        $s->bindValue(':shirt', $_POST['shirt']);
        $s->bindValue(':gender', $_POST['gender']);
        $s->bindValue(':comments', $_POST['comments']);
        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error adding submitted information: ' . $e->getMessage();
    include '../includes/error.html.php';
    exit();
    }
    
    //Load the thankyou page to run after the INSERT runs
    include 'thankyou.php';
    
}

else 
{
    include 'registration.html.php';
}
