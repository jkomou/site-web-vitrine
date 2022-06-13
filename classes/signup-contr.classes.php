<?php

class SignupContr extends Signup{

    //Renseignements de ma classe PDO
    private $username;
    private $nom;
    private $prenom;
    private $mail;
    private $pwd;

    //Constructeur de ma classe pdo
    public function __construct($username, $nom, $prenom, $mail, $pwd){  
        $this->username = $username;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->pwd = $pwd;
    }

    public function signupUser(){
        $this->setUser($this->username, $this->nom, $this->prenom, $this->mail, $this->pwd);
    }

    
}
