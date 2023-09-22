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
            <h1 id="name">Jean-Benoît MONCLA <br><span>- Expert en -<br>Maîtrise Automobile</span> </h1>
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
            Titulaire de brevets d’état (DEJEPS – BPJEPS) dans le domaine des sports mécaniques et autres activités sportives, je partage ma passion, mon expertise et mon savoir-faire depuis 2006.<br><br>
            Ma signature : du sourire, de l’humour, de la simplicité, entremêlé d’exigence, d’innovation, de créativité et d’une forte capacité d’adaptation.<br>
            Maîtrise automobile sous-entend : <br>
            - Développer et conditionner sa gestuelle technique,  <br>
            - Décoder précisément et rapidement son environnement d’évolution, <br>
            - Appréhender les changements et pertes d’adhérence<br>
            - S’adapter aux spécificités du véhicule en temps réel,<br>
            - Prendre en compte ses limites physiologiques et les contraintes physiques qui s’appliquent sur un objet en mouvement <br>
            - Canaliser ses émotions<br><br>
            Au-delà du partage d’une culture automobile, c’est dans la compréhension et l’expérimentation de cet art de « maîtriser » que je vous accompagne.  
            Mon ambition est de mettre du sens à nos actions, en tant que conducteur, et de vous permettre d’imposer vos propres décisions sur votre véhicule en toute circonstance.<br>
            J’ai pour mission de répondre à vos besoins opérationnels, vos exigences personnelles et/ou professionnelles. J’élabore et crée des supports techniques et pédagogiques en corrélation avec vos attentes et vos objectifs préalablement déterminés.<br>
            Mon éventail de compétences est en lien étroit avec la dynamique automobile, l’expertise et la culture associée à l’usage de véhicules motorisés :<br><br>
            Mission spécifique pour les corps d’intervention<br>
           - Stage de maîtrise aux risques routiers <br>
           - Coaching pilotage sur circuit<br>
            - Actions de sensibilisation<br>
            - Test clinique ou développement <br>
            - Accompagnement aux nouvelles technologies <br>
            - Evénements – formations spécifiques pour les professionnels automobiles<br>
            - Démonstration, road trip VHC, sortie Club<br>
            Déstructurons ensemble les standards de formation, pour un climat d’apprentissage au beau fixe toute l’année : « du professionnalisme solaire ». Ma passion a construit mon métier et vos projets la dynamisent au quotidien.<br><br>
            Contactez-moi pour vos besoins spécifiques, formations ou évènements motorisés.<br>
            A très bientôt.<br><br>

            Jean-Benoît MONCLA
        </article>
    </section>
</body>
<footer id="section01">
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="script.js"></script>
</html>