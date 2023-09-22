<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>    
    <link rel="stylesheet" type="text/css" href="style.css">
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
        <h1 id="name">Missions Spécifiques</h1>
    </div>
</header>
    <section id="section00">
        <article><br><br>
            Professionnels, les spécificités de vos domaines d’intervention requièrent une recherche d’exigence et d’efficacité opérationnelle au quotidien. 
            Au travers de supports de formation crées sur mesure, je viens en appui de vos compétences pour transmettre à votre équipe mon savoir-faire technique et partager ma culture automobile.
            Développons ensemble des actions adaptées à vos réalités professionnelles.
            Place à notre créativité, ayons toujours un temps d’avance.
            Formation maîtrise du véhicule opérationnel en intervention (unités spéciales – corps d’intervention)
            Test de développement concept car (routier ou piste sécurisée)
            Test centre de recherche (création ADAS, données physiologiques/conduite …)
            Organisation lancement nouveaux véhicules : parcours d’essai, présentation statique / dynamique, démonstration
            Formation à destination des conseillers automobile : process gestion d’essai client, mise en lumière des nouvelles technologies, analyse nouveau produit
            Et bien plus encore …

        </article>
    </section>
</body>
<footer id="section01">
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="script.js"></script>
</html>