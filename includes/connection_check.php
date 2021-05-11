<?php session_start();


if (isset($_SESSION['uid'])) {
    session_unset();
    header("location: ../index.php");
    exit();
}
