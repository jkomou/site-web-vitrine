<?php
//Ma classe Login récupere les données de la database
class Login extends Dbh {
    //Recupere les données des utilisateurs du site
    protected function getUser($username, $pwd){
        $stmt = $this->connect()->prepare('SELECT pwd FROM users WHERE (username = ? OR mail = ?);');

        if(!$stmt->execute(array($username, $pwd))) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }
        
        //Methode qui verifie si l'utilisateur existe dans la base de donnes
        if($stmt->rowCount() == 0)
        {
            $stmt = null;
            header('location: ../index.php?error=usernotfound');
            exit();
        }
        //Permet de hasher le mot de passe
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //Cette variable vérifie si les passwords hash correspondent
        $checkPwd = password_verify($pwd, $pwdHashed[0]['pwd']);

        if($checkPwd == false) {
            $stmt == null;
            header('location: ../index.php?error=wrongpassword');
            exit();
        }
        //Regarde si le mot de passe est le bon
        elseif($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT pwd FROM users WHERE (username = ? OR mail = ?) AND pwd = ?;');

            if(!$stmt->execute(array($username, $username, $pwdHashed[0]['pwd']))) {
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
            }

        if($stmt->rowCount() == 0)
        {
            $stmt = null;
            header('location: ../index.php?error=usernotfound');
            exit();
        }

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        session_start();
        //Assigne des valeurs aux variables
        $_SESSION["id"] = $user[0]["id"];
        $_SESSION["username"] = $user[0]["username"];
        //Connexion annulé
        $stmt = null;
        }
    }
}
