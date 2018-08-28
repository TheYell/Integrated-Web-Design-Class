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
    <link href="../styles/nav.less" rel="stylesheet/less" type="text/css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
    
</head>
    
<body>
    
    <?php include '../includes/header.inc.html.php'; ?>
    
    <?php include '../includes/navigation.inc.html.php'; ?>
    <br>
    <br>
                    
    <main>
        <h2>Registration for Athletes and Volunteers</h2>
        
        <p>Required fields are marked with an asterisk (*).</p>
        <div id="registration">
            <form method="post" action=" ">
          
            <label for="status">*Athlete or Volunteer:</label><br>
                <input type="radio" name="status" value="athlete">Athlete<br>
                <input type="radio" name="status" value="volunteer">Volunteer<br><br>
            <label for="myfname">*First Name:</label>
                <input type="text" name="fname" id="fname" required><br><br>
            <label for="mylname">*Last Name:</label>
                <input type="text" name="lname" id="lname" required><br><br>
            <label for="gender">*Gender:</label><br>
                <input type="radio" name="gender" value="male">Male<br>
                <input type="radio" name="gender" value="female">Female<br>
                <input type="radio" name="gender" value="nonbinary">NonBinary<br><br>
            <label for="myemail">*Email Address:</label>
                <input type="email" name="email" id="email" required><br><br>
            <label for="phone">*Phone Number(no dashes):</label>
                <input type="tel" name="phone" id="phone" required><br><br>
            <label for="event">Choose your Saturday event:</label>
                <select name="event">
                    <option value="xx">Select One</option>
                    <option value="SATlct">SATURDAY Long Course Triathalon &nbsp; 7:00am</option>
                    <option value="SATot">SATURDAY Olympic Triathalon &nbsp; 7:30am</option>
                    <option value="SAT10K">SATURDAY 10K &nbsp; 7:15am</option>
                    <option value="SAThm">SATURDAY Half Marathon &nbsp; 7:15am</option><br>
                </select><br><br>
           <label for="eventTwo">Choose your Sunday event:</label>
                <select name="eventTwo">
                    <option value="xx">Select One</option>
                    <option value="SUNst">SUNDAY Sprint Triathalon &nbsp; 8:00am</option>
                    <option value="SUNtat">SUNDAY Try-a-Tri &nbsp; 8:20am</option>
                    <option value="SUNsd">SUNDAY Splash n Dash &nbsp; 12:00pm</option>
                </select>
                <br><br>
            <label for="emergencyName">*Emergency Contact Name:</label>
                <input type="text" name="ename" id="ename" required><br><br>
            <label for="emergencyNumber">*Emergency Contact Phone (no dashes):</label>
                <input type="tel" name="enumber" id="enumber" required><br><br>
            <label for="shirtSize">*Shirt Size S, M, L, XL:</label>
                <select name="shirt">
                    <option value="xx" required>Select One</option>
                    <option value="s">Small</option>
                    <option value="m">Medium</option>
                    <option value="l">Large</option>
                    <option value="xl">Extra Large</option>
                </select><br><br>
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