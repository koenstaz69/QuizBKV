<?php

include '../classes/DB.class.php';

$id = $_GET['user_id'];

$sql = "DELETE FROM users WHERE user_id=:user_id";
$query = DB::get()->prepare($sql);
$query->execute(array(':user_id' => $id));

header("Location: userOverzicht.php");