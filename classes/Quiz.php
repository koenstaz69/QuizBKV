<?php

require_once 'DB.class.php';
require_once 'User.php';

class Quiz
{
    public $conn;

    public function regQuiz()
    {
        $sql = "INSERT INTO quiz(quiz_id, user_id, naam) VALUES (:quiz_id, :user_id, :naam)";

        $stmt = DB::get()->prepare($sql);

        $stmt->bindValue(':naam', $_POST['naam'], PDO::PARAM_STR);
        $stmt->execute();

        header("Location: userpage.php?registeredquiz");
        exit();
    }

    public function getQuiz()
    {
        $getQuiz = 'SELECT * FROM quiz WHERE user_id';
    }
}