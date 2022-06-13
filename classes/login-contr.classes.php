<?php

//Ma classe LoginContr récupere les données de ma classe Login
class LoginContr extends Login{

private $username;
private $pwd;

public function __construct($username, $pwd){
    $this->username = $username;
    $this->pwd = $pwd;
}

//Gestion des erreurs
public function loginUser(){
    if($this->emptyInput() == false) {
        header("location: ../index.php?error=emptyinput");
        exit();
    }
    

    $this->getUser($this->username, $this->pwd);
}

private function emptyInput(){
    $result;
    if(empty($this->username) || empty($this->pwd)) {
        $result = false;
    }
    else {
        $result = true;
    }
    return $result;
}

}

?>