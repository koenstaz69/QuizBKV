<?php

require_once 'DB.class.php';

class User
{
    public $conn;

    public function regUser()
    {
        $sql = 'INSERT INTO users(gebruikersnaam, email, wachtwoord) VALUES (:gebruikersnaam, :email, :wachtwoord)';

        $stmt = DB::get()->prepare($sql);

        $stmt->bindValue(':gebruikersnaam', $_POST['gebruikersnaam'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $stmt->bindValue(':wachtwoord', password_hash($_POST['wachtwoord'], PASSWORD_BCRYPT), PDO::PARAM_STR);
        $stmt->execute();
    }
}