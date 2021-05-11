<?php

include './database_handler.php';
include './functions.php';


if (!isset($_POST['submit'])) {
    header('location: ../signup.php?accessdenied');
    exit();
}

if (emptyInputs([$_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['age'], $_POST['mdp'], $_POST['mdprepeat']])) {
    header('location: ../signup.php?message=emptyinput');
    exit();
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header('location: ../signup.php?message=invalidemail');
    exit();
}

if (!is_between(strlen($_POST['mdp']), 6, 12)) {
    header('location: ../signup.php?message=passwordlenght');
    exit();
}

if ($_POST['mdp'] !== $_POST['mdprepeat']) {
    header('location: ../signup.php?message=passworddontmatch');
    exit();
}

if (invalidAge($_POST['age'])) {
    header('location: ../signup.php?message=invalidAge');
    exit();
}

if (userexists($dbh, $_POST['email'])) {
    header('location: ../signup.php?message=userexists');
    exit();
}

if (!createUser($dbh, $_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['email'], $_POST['mdp'])) {
    header('location: ../signup.php?message=createuserfailure');
    exit();
}


header('location: ../signup.php?message=accountcreated');
exit();
