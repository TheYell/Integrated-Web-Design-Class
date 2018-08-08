<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Success</title>
  </head>
  <body>
    <p>
      Thank You for your <?php echo htmlspecialchars($_POST['event']); ?> Registration <?php echo htmlspecialchars($_POST['fname']); ?>  <?php echo htmlspecialchars($_POST['lname']); ?> !
    </p>
  </body>
</html>