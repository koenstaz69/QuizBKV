<?php

require_once 'DB.class.php';

class User
{
    public $conn;

    public function regUser()
    {
        $sql = 'INSERT INTO users(naam, email, wachtwoord) VALUES (:naam, :email, :wachtwoord)';

        $stmt = DB::get()->prepare($sql);

        $stmt->bindValue(':naam', $_POST['naam'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $stmt->bindValue(':wachtwoord', password_hash($_POST['wachtwoord'], PASSWORD_BCRYPT), PDO::PARAM_STR);
        $stmt->execute();
    }

    public function logUser()
    {
        //Haalt enige whitespaces weg uit de inputs
        $naam = !empty($_POST['naam']) ? trim($_POST['naam']) : null;
        $wachtwoord= !empty($_POST['wachtwoord']) ? trim($_POST['wachtwoord']) : null;

        //De database gegevens (tables en colums) worden aan een variable toegevoegd
        $sql = "SELECT user_id, naam, wachtwoord FROM users WHERE naam=:naam";

        //De connectie met de database wordt aan een variable toegevoegd.
        $stmt = DB::get()->prepare($sql);

        //De ingevulde value worden gebruikt om de username te controleren in de volgende if statement.
        $stmt->bindValue(':naam', $naam);
        $stmt->execute();

        //Haalt de bijbehorende username op
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        //Controleert of de ingevulde username en wachtwoord overeenkomen met degene uit de database
        if($user === false)
        {
            header("Location: login.php?wrongcombination");
            exit();
        } else
        {
            //Voeg de ingevulde value toe aan de variable $validPassword
            $validPassword = password_verify($wachtwoord, $user['wachtwoord']);

            //Controleert of de ingevulde wachtwoord overeenkomt met de hash in de database.
            if($validPassword)
            {
                $_SESSION['id'] = $user['user_id'];
                $_SESSION['logged_in'] = time();

                header("Location: index.php?login=success");
                exit();

            }
        }
    }
}