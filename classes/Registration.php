<?php

require 'DB.php';

class Registration
{
    public function signUp()
    {
        //  De database gegevens (tables en colums) worden aan een variable toegevoegd
        $sql = "INSERT INTO users(naam, email, wachtwoord) VALUES (:naam, :email, :wachtwoord)";

//  De connectie met de database wordt aan een variable toegevoegd.
        $stmt = DB::get()->prepare($sql);

//  De ingevulde values worden toegevoegd aan de bijbehorende tables en colums in de database. Ook word de wachtwoord gehashed met PASSWORD_BCYPT
        $stmt->bindValue(':naam', $_POST['naam'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $stmt->bindValue(':wachtwoord', password_hash($_POST['wachtwoord'], PASSWORD_BCRYPT), PDO::PARAM_STR);
        $stmt->execute();
    }
}