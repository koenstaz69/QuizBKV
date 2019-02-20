<?php
session_start();

if(!isset($_SESSION['id']) || !isset($_SESSION['logged_in']))
{
    header("Location: index.php?logged=false");
    exit();
}

if(isset($_POST['logoutButton']))
{
    $logout = new User();
    $logout->logOut();
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
<h1>User Pagina</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <a href="logout.php" class="btn btn-primary">Uitloggen</a>
            <a href="quizes.php" class="btn btn-primary">Quizes</a>
        </div>
    </div>
</div>

<?php include 'includes/scripts.php'; ?>
<script>

</script>
</body>
</html>