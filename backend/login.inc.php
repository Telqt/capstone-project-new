<?php


if(isset($_POST["submit"])){

    require_once "dbh.php";
    require_once "functions.php";

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


    loginUser($conn, $email, $pwd);


} else {
    header("location: ../login.php");
    exit();
}