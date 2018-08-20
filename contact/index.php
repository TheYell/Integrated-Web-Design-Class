<?php

//CONTACT FORM

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
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    
    try
    {   //database name = :variable name
        $sql = 'INSERT INTO contact SET
            fname = :fname,
            lname = :lname,
            email = :email,
            comments = :comments';
        $s = $pdo->prepare($sql);
        $s->bindValue(':fname', $_POST['fname']);
        $s->bindValue(':lname', $_POST['lname']);
        $s->bindValue(':email', $_POST['email']);
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
    include 'thankyou.html.php';
    
}

else 
{
    include 'contact.html.php';
}
