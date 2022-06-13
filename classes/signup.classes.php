<?php

class Signup extends Dbh {

    protected function setUser($username, $nom, $prenom, $mail, $pwd){
        $stmt = $this->connect()->prepare('INSERT INTO users (username, nom, prenom, mail, pwd) VALUES (?, ?, ?, ?, ?);');
        
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($username, $nom, $prenom, $mail, $hashedPwd))) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($username, $nom, $prenom, $mail, $pwd){
        $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR nom = ? OR prenom = ? OR mail = ? OR pwd = ?;');

        if($stmt->execute(array($username, $nom, $prenom, $mail, $pwd))) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }
        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else
        {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}
