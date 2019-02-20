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

<?php include 'navbar.php' ?>

<h1>Index Pagina</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
        </div>
    </div>
</div>

<<<<<<< HEAD
<?php include 'includes/scripts.php'?>
=======
<?php include 'footer.php' ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
>>>>>>> parent of f00ef6f... rip footer
<script>
</script>
</body>
</html>