<?php
session_start();

require_once 'classes/DB.class.php';
require_once 'classes/User.php';

if(isset($_POST['submitLogin']))
{
    $login = new User();
    $login->logUser();
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'includes/links.php'; ?>
</head>
<body>
<div class="container">
        <div class="loginmodal-container">
            <a href="index.php" class="btn btn-primary">Home</a>
            <h1>Login</h1><br>
            <form method="post">
                <input type="text" name="naam" placeholder="Gebruikersnaam" required>
                <input type="password" name="wachtwoord" placeholder="Wachtwoord" required>
                <button type="submit" name="submitLogin" class="login loginmodal-submit">Login</button>
            </form>
        </div>
</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>