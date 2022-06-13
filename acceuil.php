<?php
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mon acceuil</title>
        <link rel="stylesheet" href="stylebody.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>
    <body>
        <header>
            <nav>
            <div class="header">
  <img href="#default" class="logo" src="logo.png"></a>
  <div class="header-right">
    <a class="active" href="acceuil.php">Home</a>
    <a href="activites.php">Activités</a>
    <a href="blogs.php">Blogs</a>
    <a href="formulaire.php">Contact</a>
    <a href="index.php">Logout</a>
  </div>
</div>
            </nav>
        </header>
    <section class = "services">
        <div class= "service-item">
            <i class="fa-solid fa-globe delivery-icon"></i>
            <p>Présent sur plus de 10 pays, notre laboratoire est à votre service</p>
        </div> 
        <div class="service-item">
            <i class="fa-solid fa-flask-vial delivery-icon"></i>
            <p>Notre laboratoire effectue de nombreuses recherches innovateurs et diversifiés</p>
        </div>
        <div class="service-item">
        <i class="fa-solid fa-seedling delivery-icon"></i>
            <p>Notre labarotoire s'inscrit dans une politique environnementale et sociale</p>
        </div>
    </section>
    <section class = "presentation">
        <img src="acceuil-img1.jpg" class="acc-img1">
        <div class = "texte1">
        <p> Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant américain Galaxy et le conglomérat européen Swiss Bourdin (travaillant sur des médicaments plus conventionnels), lui même déjà union de trois petits laboratoires. En 2009, les deux géants pharmaceutiques ont uni leurs forces pour créer un leader de ce secteur
industriel. </p>
        </div>
    </section>
    <section class = "activtes">
        <div class="texte2">
        <p> Notre entreprise est spécialisé dans la recherche contre le SIDA et les hépatites virales
            <br>De nombreux travaux sont menés sur les interactions virus-hôte, le traitement de l'infection ou l'étude de candidats-vaccins. 
        </p>
    </div>
        <img src="acceuil-img2.jpg" class="acc-img2">
    </section>
    <footer>
        <p class="copyright">&copy; 2022 - laboratoire GSB</p>
        <a href="#" class="cgv">Conditions générales de vente</a>
    </footer>

    </body>
</html>