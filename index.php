<?php
session_start();

require_once 'classes/DB.class.php';

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
    <?php include 'includes/links.php'?>
</head>
<body>

<?php include 'includes/navbar.php' ?>

<h2>Index</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
        </div>
    </div>
</div>

<?php include 'includes/scripts.php'?>
<script>
</script>
</body>
</html>