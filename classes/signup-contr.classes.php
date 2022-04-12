<?php

class SignupContr {

    private $username;
    private $nom;
    private $prenom;
    private $mail;
    private $pwd;

    public function __construct($pseudo, $username, $prenom, $mail, $pwd){
        $this->pseudo = $pseudo;
        $this->username = $username;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->pwd = $pwd;
    }
    
    private function emptyInput(){
        $result;
        if(empty($this->$pseudo)) || empty($this->$pwd) || empty($this->$nom) || empty($this->$mail)) || empty($this->$prenom) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidUsername() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
            $result = false;
        }
        else
        {
        $result = true;
        }
        return $result;
    }
}

?>