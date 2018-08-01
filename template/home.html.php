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
     
    <link href="styles/styles.less" rel="stylesheet/less" type="text/css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
    
</head>
    
<body>
    
    <?php include 'includes/header.inc.html.php'; ?>
      
    <main>
        <?php include 'includes/navigation.inc.html.php'; ?>
    <br>
    <br>
                
            <article> <!-- Slideshow container -->
                <h2>Header 2</h2>
            <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="./images/bike.png" style="width:100%" alt="bike">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="./images/run.png" style="width:100%" alt="run">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext"></div>
                    <img src="./images/swim.png" style="width:100%" alt="swim">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </article>
                
                <!-- The dots/circles, keeps dot still -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
            <br>
        
             <?php include 'includes/weather.inc.html.php'; ?>
            <aside>   
                <p>Facebook Include</p>
                <p>Twitter Include</p>
            </aside>    
                       
            <section>
            <h2>Header 2</h2>
                <p>Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text </p>
            <br>
            <h2>Header 2</h2>
                <ul>
                    <li>item one</li>
                    <li>item two</li>
                    <li>item three</li>
                </ul>
            <br>
            <h2>Header 2</h2>
                <p>Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text Paragraph text</p>
                <br>
            </section>
        </main>
    
    <?php include 'includes/footer.inc.html.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="scripts/scripts.js"></script>  
    
</body>
</html>