<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta name="viewport" content="width=device-width, nitial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
    <title>Message Sent</title>
    <meta name="description" content="A sporting event.">
    
    <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
     
    <link href="../styles/styles.less" rel="stylesheet/less" type="text/css">
    <link href="../styles/nav.less" rel="stylesheet/less" type="text/css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
    
</head>
    
<body>
    
    <?php include '../includes/header.inc.html.php'; ?>
      
    <main>
        <?php include '../includes/navigation.inc.html.php'; ?>
    <br>
    <br>
                
    
        <h2>Your Message Has Been Sent</h2>
            <p>Thank You for reaching out <?php echo htmlspecialchars($_POST['fname']); ?>  <?php echo htmlspecialchars($_POST['lname']); ?>. Someone will reply to your message shortly!</p>
        <br>
        <br>
        <br>
        
    </main>
    
    <?php include '../includes/footer.inc.html.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="../scripts/scripts.js"></script>  
    
</body>
</html>