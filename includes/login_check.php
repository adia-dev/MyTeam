<?php session_start();

include "./database_handler.php";
include "./functions.php";

if (!isset($_POST['submit'])) {
    header('location: ../login.php?message=accessdenied');
    exit();
}


if (emptyInputs([$_POST['email'], $_POST['password']])) {
    header('location: ../login.php?message=emptyinput');
    exit();
}

if (!userexists($dbh, $_POST['email'])) {
    header('location: ../login.php?message=userdoesnotexist');
    exit();
}

if (!validpassword($dbh, $_POST['email'], $_POST['password'])) {
    header('location: ../login.php?message=wrongpassword');
    exit();
}

$_SESSION['uid'] = $_POST['email'];
header('location: ../index.php?message=connected');
exit();
