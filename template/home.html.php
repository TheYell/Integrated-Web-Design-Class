<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta name="viewport" content="width=device-width, nitial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
    <title>Ace in the Hole</title>
    <meta name="description" content="A sporting event.">
    
    <link href="https://fonts.googleapis.com/css?family=Muli|Paytone+One" rel="stylesheet">
     
    <link href="styles/styles.less" rel="stylesheet/less" type="text/css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.7.1/less.min.js" ></script>
    
</head>
    
<body>
    
    <?php include 'includes/header.inc.html.php'; ?>
    <h1>PHP Include Header</h1>
    
        <!--Hamburger-->
        <header>
	       <button class="hamburger">&#9776;</button>
	       <button class="cross">&#735;</button>
        </header>
        <div class="menu">
            <ul>
                <a href="#"><li>LINK ONE</li></a>
                <a href="#"><li>LINK TWO</li></a>
                <a href="#"><li>LINK THREE</li></a>
            </ul>
        </div>
        <!--END hamburger-->
    
    <br>
    
    <?php include 'includes/navigation.inc.html.php'; ?>
        
        <main>
            <article>
                <h2>Header 2</h2>
                
                <!-- Slideshow container -->
                <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="images/bike.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="images/run.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="images/swim.png" style="width:100%">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
            </article>
            <br>
        
            <aside>
                <!--Weather-->
                <a href="https://www.accuweather.com/en/us/portland-or/97209/weather-forecast/350473" class="aw-widget-legal">
                    <!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
-->
                </a>
                <div id="awcc1532289911443" class="aw-widget-current"  data-locationkey="350473" data-unit="f" data-language="en-us" data-useip="false" data-uid="awcc1532289911443"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
                
                <!--Social Media-->
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
            </section>
        </main>
    
    <br>
    <br>
    
    <?php include 'includes/footer.inc.html.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="scripts/scripts.js"></script>    
    
</body>
</html>