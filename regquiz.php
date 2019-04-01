<?php

require_once 'classes/DB.class.php';
require_once 'classes/Quiz.php';


if (isset($_POST['signUp']))
{
    $quiz = new Quiz();
    $quiz->regQuiz();
    return $regQuiz;
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
            <h1>Quiz</h1><br>
            <form method="post">
                <input type="text" name="onderwerp" placeholder="onderwerp" required>
              
                <button type="submit" name="signUp" class="login loginmodal-submit">Aanmaken</button>
            </form>
        </div>
</div>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/scripts.php'; ?>
<script>

</script>
</body>
</html>