<?php

session_start();
session_unset();
session_destroy();

//Revenir à la page d'acceuil
header("location: ../index.php?error=none");


