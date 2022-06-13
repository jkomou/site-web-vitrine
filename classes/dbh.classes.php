<?php
//Connection pdo
class Dbh {
    public function connect() {
        try {
            $username = 'root';
            $pwd = '';
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $pwd);
            return $dbh;
        }
        catch (PDOException $e) {
            print 'Error !:' .$e->getMessage() . '<br/>';
            die();
        }
    }
}
