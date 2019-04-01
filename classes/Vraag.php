<?php

require_once 'DB.class.php';
require_once 'User.php';

class Vraag
{
    public $conn;

         public function regVraag()
    {
        $sql = "INSERT INTO vragen(vraag, antwoord1, antwoord2, antwoord3, antwoord4) VALUES (:vraag, :antwoord1, :antwoord2, :antwoord3, antwoord4)";

        $stmt = DB::get()->prepare($sql);

        $stmt->bindValue(':vraag', $_POST['vraag'], PDO::PARAM_STR);
        $stmt->bindValue(':antwoord1', $_POST['antwoord1'], PDO::PARAM_STR);
        $stmt->bindValue(':antwoord2', $_POST['antwoord2'], PDO::PARAM_STR);
        $stmt->bindValue(':antwoord3', $_POST['antwoord3'], PDO::PARAM_STR);
        $stmt->bindValue(':antwoord4', $_POST['antwoord4'], PDO::PARAM_STR);
        $stmt->execute();

        header("Location: userpage.php?createvraag");
        exit();
    }
}
