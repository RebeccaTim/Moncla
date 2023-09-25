<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>    
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
    <nav>
        <div id="brand">
            <div id="logo" ><a href="index.php"><img id="logoimg" src="logo/logo-MONCLA-expert-automobile.png" alt="Logo"></a></div>
            <div id="word-mark"></div>
        </div>
        <div id="menu">
            <div id="menu-toggle">
                <div id="menu-icon">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
            <ul id="pages" class="gradient">
                <li><a href="missions_spec.php">Missions Spécifiques</a></li>
                <li><a href="maitrise_rr.php">Maîtrise du risque routier</a></li>
                <li><a href="coaching.php">école de Pilotage / Coaching</a></li>
                <li><a href="#section03">Contact</a></li>
            </ul>
        </div>
        
    <a class="top"><span id="arrow">&#11192;</span><span id="toptext">Haut</span></a>
    </nav>
    <div id="hero-section">
        <div id="head-line">
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <img src="img/slide-accueil-01.jpg">
                    </div>

                    <div class="mySlides fade">
                        <img src="img/slide-accueil-02.jpg">
                    </div>

                    <div class="mySlides fade">
                        <img src="img/slide-accueil-03.jpg">
                    </div>

                    <div class="mySlides fade">
                        <img src="img/slide-accueil-04.jpg">
                    </div>

                    <div class="mySlides fade">
                        <img src="img/slide-accueil-05.jpg">
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>

                <!-- The dots/circles -->
                <div style="text-align:center; margin-top:7px ">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                </div>
        </div>
        <h1 id="name">école de pilotage / <br> Coaching</h1>
    </div>
</header>
    <div class="media_bar"> 
        <ul id="media">
            <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="mail"><i class="fa fa-regular fa-at"></i></a></li>
        </ul>                           
    </div>      
    <section id="section00">
        <article><br><br>
        <p><strong>L&rsquo;art de la ma&icirc;trise</strong> automobile&nbsp;: trajectoire, gestion des transferts de charge, coordination, dissociation, gestuelles techniques sp&eacute;cifiques. Je vous accompagne pour d&eacute;couvrir les <strong>subtilit&eacute;s</strong> de l&rsquo;univers des <strong>sports m&eacute;caniques </strong>et pour vous transmettre les <strong>techniques de pilotage</strong> propre &agrave; la circleipline qui vous passionne.</p>
        <br>
        <ul>
            <li style="list-style-type:circle"><strong>Circuit</strong> asphalte</li>
            <li style="list-style-type:circle"><strong>Off road&nbsp;</strong></li>
            <li style="list-style-type:circle">Circuit Terre</li>
        </ul>
        <br>
        <p><strong>Accessible &agrave; tous</strong>, je vous conseille pour vos premiers tours de <strong>circuit </strong>et vous &eacute;paule pour r&eacute;pondre &agrave; vos besoins de <strong>perfectionner </strong>votre technique de pilotage et/ou votre approche de la circleipline.&nbsp;</p>
        <br>
        <ul>
            <li style="list-style-type:circle"><strong>Coaching club</strong> automobile</li>
            <li style="list-style-type:circle"><strong>Initiation pilotage</strong> circuit</li>
            <li style="list-style-type:circle">Perfectionnement pilotage</li>
            <li style="list-style-type:circle">Accompagnement <strong>enfant - </strong><span style="color:#ff0000"><strong>premier motoris&eacute;</strong></span></li>
            <li style="list-style-type:circle"><strong>Ev&egrave;nements groupe</strong> / entreprise</li>
        </ul>
        <br>
        <p>La passion se vit avec le sourire, la simplicit&eacute; et la bonne humeur.</p>

        <p>&nbsp;</p>

        </article>
    </section>
</body>
<footer id="section01">
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="script.js"></script>
</html>