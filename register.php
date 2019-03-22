<?php

require_once 'classes/DB.class.php';
require_once 'classes/User.php';
require_once 'lib/password.php';


if (isset($_POST['signUp']))
{

    $user = new User();
    $user->regUser();

    return $user;

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'includes/links.php'; ?>

</head>
<body>

<?php include 'includes/navbar.php'; ?>

<div class="container">
        <div class="loginmodal-container">
            <a href="index.php" class="btn btn-primary">Home</a>
            <h1>Registreren</h1><br>
            <form method="post">
                <input type="text" name="naam" placeholder="Gebruikersnaam" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="wachtwoord" placeholder="Wachtwoord" required>
                <button type="submit" name="signUp" class="login loginmodal-submit">Registreren</button>
            </form>
        </div>
</div>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/scripts.php'; ?>
<script>

</script>
</body>
</html>