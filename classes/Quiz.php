<?php

require_once 'DB.class.php';
require_once 'User.php';

class Quiz
{
    public $conn;

    public function regQuiz()
    {
        $sql = "INSERT INTO quiz(quiz_id, user_id, onderwerp) VALUES (:quiz_id, :user_id, :onderwerp)";

        $stmt = DB::get()->prepare($sql);

        $stmt->bindValue(':onderwerp', $_POST['onderwerp'], PDO::PARAM_STR);
        $stmt->execute();

        header("Location: userpage.php?createdquiz");
        exit();
    }
}