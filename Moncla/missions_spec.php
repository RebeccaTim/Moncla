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
        <h1 id="name">Missions Spécifiques</h1>
    </div>
</header>
    <div class="media_bar"> 
        <ul id="media">
            <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="mail"><i class="fa fa-regular fa-at"></i></a></li>
        </ul>                           
    </div>      
    <section id="section00">
        <article>
        <p><strong>Professionnels</strong>, les sp&eacute;cificit&eacute;s de vos domaines d&rsquo;intervention requi&egrave;rent une recherche d&rsquo;<strong>exigence</strong> et d&rsquo;<strong>efficacit&eacute; op&eacute;rationnelle</strong> au quotidien.&nbsp;</p>
        <br>
        <p>Au travers de supports de <strong>formation</strong> cr&eacute;&eacute;s <strong>sur mesure</strong>, je viens en appui de vos comp&eacute;tences pour transmettre &agrave; votre &eacute;quipe mon <strong>savoir-faire technique</strong> et partager ma <strong>culture automobile</strong>.</p>
        <br>
        <p>D&eacute;veloppons ensemble des <strong>actions adapt&eacute;es</strong> &agrave; vos <strong>r&eacute;alit&eacute;s professionnelles</strong>.</p>
        <br>
        <p>Place &agrave; notre cr&eacute;ativit&eacute;, ayons toujours <strong>un temps d&rsquo;avance</strong>.</p>
        <br>
        <ul>
            <li style="list-style-type:circle"><strong>Formation ma&icirc;trise</strong> du v&eacute;hicule op&eacute;rationnel en <strong>intervention</strong><span style="color:#2f5496; font-size: large"><em> (unit&eacute;s sp&eacute;ciales &ndash; corps d&rsquo;intervention)</em></li>
            <li style="list-style-type:circle"><strong>Test</strong> de <strong>d&eacute;veloppement concept car</strong><span style="color:#2f5496; font-size: large"><em> (routier ou piste s&eacute;curis&eacute;e)</em></li>
            <li style="list-style-type:circle"><strong>Test centre de recherche</strong><span style="color:#2f5496; font-size: large"><em> (cr&eacute;ation ADAS, donn&eacute;es physiologiques/conduite &hellip;)</em></li>
            <li style="list-style-type:circle">Organisation <strong>lancement nouveaux v&eacute;hicules</strong>&nbsp;:<span style="color:#2f5496; font-size: large"><em> parcours d&rsquo;essai, pr&eacute;sentation statique / dynamique, d&eacute;monstration</em></li>
            <li style="list-style-type:circle"><strong>Formation </strong>&agrave; destination des <strong>conseillers automobile</strong>&nbsp;:<span style="color:#2f5496; font-size: large"><em> process gestion d&rsquo;essai client, mise en lumi&egrave;re des nouvelles technologies, analyse nouveau produit</em></li>
            <li style="list-style-type:circle">Et bien plus encore &hellip;</li>
        </ul>

        <p>&nbsp;</p>

        </article>
    </section>
</body>
<footer id="section01">
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="script.js"></script>
</html>