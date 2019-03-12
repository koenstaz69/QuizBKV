<?php

require_once 'classes/DB.class.php';
require_once 'classes/User.php';

////Controleert of er een geldige login-sessie gaande is.
//if(!isset($_SESSION['id']) || !isset($_SESSION['logged_in']))
//{
//    header('Location: ../index.php?notloggedin');
//    exit();
//}

// Haalt het menu op
$getUsers = 'SELECT * FROM users';

// Variabel query wordt aangemaakt
$query = DB::get()->prepare($getUsers);


// Fetch wordt aangeroepen
$query->setFetchMode(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html>
<head>
    <title>Excellent Taste - Overzicht Reservering</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
</head>
<body>

<?php include "includes/navbar.php";?>

<br>
<div id="container">
    <h1 style="margin-left:10%;" class="headerReservering">Overzicht Gebruikers</h1>
    <br>
    <div class="row">
        <div style="margin-left:10%;" class="col-lg-9">
            <table class="table table-bordered table-condensed">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php while ($row = $query->fetch()): ?>
                <tr>
                    <?php
                        echo "<tr>" .
                            "<td>" . $row["user_id"] . "</td>" .
                            "<td>" . $row["naam"] . "</td>" .
                            "<td>" . $row["email"] . "</td>" .
                            "<td>" . $row["rol"] . "</td>" .
                            "<td><a class='btn btn-danger' href='admin/deleteUser.php?user_id=".$row['user_id']."'>Verwijderen</a></td>" .
//                          "<td><a class='btn btn-warning' href='editReservation.php?klant_id=".$row['klant_id']."'>Aanpassen</a></td>" .
                            "</tr>"
                    ?>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
<!--        <div style="margin-left:44.8%;" class="col-lg-6">-->
<!--            <a href="addReservation.php"><button type="button" style="float: right; margin-right: 15%;" class="btn btn-primary">Reservering toevoegen</button></a>-->
<!--        </div>-->
    </div>
</div>



</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
