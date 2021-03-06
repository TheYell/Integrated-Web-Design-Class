<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta name="viewport" content="width=device-width, nitial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
    <title>Ace in the Hole</title>
    <meta name="description" content="A sporting event.">
    
    <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
     
    <link href="../styles/styles.less" rel="stylesheet/less" type="text/css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
    
</head>
    
<body>
    
    <?php include '../includes/header.inc.html.php'; ?>
    
    <?php include '../includes/navigation.inc.html.php'; ?>
    <br>
    <br>
                    
    <main>
        <h1>Registration for Athletes and Volunteers</h1>
        
      <p>Required fields are marked with an asterisk (*).<p><br>
      <div id="registration">
      <form method="post" action=" ">
          
        <label for="status">*Athlete or Volunteer:</label>
            <input type="text" name="status" id="status" required><br><br>
        <label for="myfname">*First Name:</label>
          <input type="text" name="fname" id="fname" required><br><br>
        <label for="mylname">*Last Name:</label>
          <input type="text" name="lname" id="lname" required><br><br>
        <label for="myemail">*Email Address:</label>
          <input type="email" name="email" id="email" required><br><br>
        <label for="phone">*Phone Number:</label>
          <input type="int" name="phone" id="phone" required><br><br>
        <label for="event">*Saturday or Sunday:</label>
            <input type="text" name="event" id="event" required><br><br>
        <label for="emergencyName">*Emergency Contact Name:</label>
          <input type="text" name="ename" id="ename" required><br><br>
        <label for="emergencyNumber">*Emergency Contact Phone:</label>
          <input type="int" name="enumber" id="enumber" required><br><br>
        <label for="shirtSize">*Shirt Size S, M, L, XL:</label>
          <input type="text" name="shirt" id="shirt" required><br><br>
        <label for="gender">*Gender:</label>
          <input type="text" name="gender" id="gender" required><br><br>
        <label for="mycomments">Comments or Questions?</label>
          <textarea name="comments" id="comments" rows="3" cols="30"></textarea><br><br>
          <input id="mysubmit" type="submit" value="Submit">
          
      </form>
      </div>
        <br><br><br>
    </main>
    
    <?php include '../includes/footer.inc.html.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../scripts/scripts.js"></script>    
    
</body>
</html>