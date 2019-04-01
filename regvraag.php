<?php

require_once 'classes/DB.class.php';
require_once 'classes/Vraag.php';


if (isset($_POST['signUp']))
{
    $vraag = new Vraag();
    $vraag->regVraag();
    return $vraag;
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
            <h1>Vraag</h1><br>
            <form method="post">
                <input type="text" name="Vraag" placeholder="Vraag" required>
                <input type="text" name="antwoord1" placeholder="antwoord" required>
                <input type="text" name="antwoord2" placeholder="antwoord" required>
                <input type="text" name="antwoord3" placeholder="antwoord" required>
                <input type="text" name="antwoord4" placeholder="antwoord1" required>
                <button type="submit" name="signUp" class="login loginmodal-submit">Opslaan</button>
            </form>
        </div>
</div>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/scripts.php'; ?>
<script>

</script>
</body>
</html>