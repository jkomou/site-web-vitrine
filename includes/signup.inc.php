<?php

if(isset($_POST["submit"])){
    
    // Récupérez les données du formulaire
    $username = $_POST["username"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $pwd = $_POST["password"];

    //Instanciation de la classe SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($username, $nom, $prenom, $mail, $pwd);

    //Gestion des erreurs

    $signup->signupUser();

    //Revenir à la page d'acceuil
    header("location: ../index.php?error=none");
}
