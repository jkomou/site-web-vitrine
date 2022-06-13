<?php
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mon acceuil</title>
        <link rel="stylesheet" href="styleblog.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>
    <body>
        <!--Header-->
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
    <!--Les articles de mon site-->
    <section class="articles">

    <div class="article">


            <div class="left">
            <a href="blog1.php"><img src="sida-photo.jpg"></a>
            </div>

            <div class="right">
                <p class="date">Mai, 24, 2022</p>

                <a href="blog1.php"><h1>Enjeux de la recherche contre le sida</h1></a>
                <p class="description">Des avancées remarquables dans la recherche fondamentale et clinique ainsi que dans le traitement et la prévention ont permis en 2012 d’enrayer la montée de la pandémie.  Toutefois, Avec plus de 34 millions de personnes infectées dans le monde, et 2,5 millions de nouvelles contaminations chaque année, le sida continue aujourd'hui d'être un problème majeur de santé publique</p>
                <p class="auteur">Jean KOMOU</p>
            </div>
    
    </div>

    <div class="article">


            <div class="left">
                <a href="blog2.php"><img src="hepatite-photo.jpg"></a>
            </div>

            <div class="right">
                <p class="date">Mai, 30, 2022</p>

                <a href="blog2.php"><h1>Comprendre l’hépatite : origines, formes, examens et traitements</h1></a>
                <p class="description">Comprendre l'hépatite B. L'hépatite B est une infection virale majeure qui touche le foie et se transmet via les liquides et sécrétions de l'organisme</p>
                <p class="auteur">Jean KOMOU</p>
            </div>
    
    </div>
</section>

</nav>
<!--Pied de page-->
<footer>
        <p class="copyright">&copy; 2022 - laboratoire GSB</p>
        <a href="#" class="cgv">Conditions générales de vente</a>
        </footer>
</body>
</html>