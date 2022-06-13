<?php

//Si la valeur submit existe
if(isset($_POST["submit"])){
    
    // Récupérez les données du formulaire
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    //Instanciation de la classe SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($username, $pwd);

    //Gestion des erreurs

    $login->loginUser();

    //Revenir à la page d'acceuil
    header("location: ../acceuil.php");
}
