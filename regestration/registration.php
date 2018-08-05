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
    
    <?php include 'includes/header.inc.html.php'; ?>
    
    <?php include 'includes/navigation.inc.html.php'; ?>
    <br>
    <br>
                    
    <main>
        <h1>Registration for Athletes and Volunteers</h1>
        
      <p>Required fields are marked with an asterisk (*).<p><br>
      <div id="registration">
      <form method="post" action=" ">
        <label for="status">*Athlete or Volunteer:</label>
        <select size="1" name="option" id="option">
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
        </select> <br><br>
        <label for="fname">*First Name:</label>
          <input type="text" name="fname" id="fname" required><br><br>
        <label for="lname">*Last Name:</label>
          <input type="text" name="lname" id="lname" required><br><br>
        <label for="email">*Email Address:</label>
          <input type="email" name="email" id="email" required><br><br>
        <label for="comments">Comments or Questions?</label>
          <textarea name="comments" id="comments" rows="3" cols="30"></textarea><br><br>
          <input id="submit" type="submit" value="Submit">
      </form>
      </div>
        <br><br><br>
    </main>
    
    <?php include 'includes/footer.inc.html.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../scripts/scripts.js"></script>    
    
</body>
</html>