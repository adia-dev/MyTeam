<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Myteam</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
</head>

<body>
    <header>
        <div class="logo-container">
            <img src="./assets/images/myteam_logo_football.png" alt="logo" class="logo" />
            <h1>MyTeam</h1>
            <h4>Le site des amateurs de sports</h4>
            <!-- <video src="assets/videos/myteam_football.mp4" autoplay loop></video> -->
        </div>

        <nav>
            <ul class="nav-links">
                <li><a href="#" class="nav-link">Acceuil</a></li>
                <li><a href="#" class="nav-link">My Team</a></li>
                <li><a href="#" class="nav-link">Sports</a></li>
                <li><a href="#" class="nav-link">Boutique</a></li>
                <li><a href="#" class="nav-link">Actualités</a></li>
                <li><a href="#" class="nav-link">S'abonner</a></li>
                <!-- <li><a href="#" class="nav-link"></a></li> -->
            </ul>
        </nav>

        <div class="account-container">
            <?php if (isset($_SESSION['uid'])) {
                echo '
                <a href="#">Mon compte</a>
                <a href="./includes/connection_check.php">Se déconnecter</a>
                ';
            } else {
                echo "
                <a href='login.php'>Se connecter</a>
                <a href='signup.php'>S'inscrire</a>
                ";
            }
            ?>

        </div>
    </header>