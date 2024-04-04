<?php

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/shop.css">
    <link rel="stylesheet" href="./css/userProfile.css">
    <link rel="stylesheet" href="./css/products.css">
    <link rel="stylesheet" href="./css/cart.css">
    <!-- <link rel="stylesheet" href="./css/userProfile.css"> -->

    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    
    <title>DAYO | Tactical gear</title>
</head>
<body>
    <div id="progressbar"></div>
    <div id="scrollPath"></div>
    <header>
        <div class="logo" onclick="location.href='index.php';">
            <img src="./img/icon.png" alt="dayo logo">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="contact.php">contact</a></li>
            </ul>
        </nav>

        <div class="login_panel">

            <?php
                if(isset($_SESSION["UID"])) {

                    if($_SESSION["UID"] === 1 AND $_SESSION["email"] === "admin.dayo@gmail.com") {
                        echo '<a class="login_btn" href="dashboardInv.php">Dashboard</a>';
                        echo '<a class="logout_btn" href="logout.php">Logout</a>';
                    } else {
                        echo '<a class="login_btn" href="userProfile.php?UID=' . $_SESSION["UID"] . '">' . $_SESSION["firstname"] . '</a>';
                        echo '<a class="logout_btn" href="logout.php">Logout</a>';
                        echo '
                        <div class="cart_btn_sticky" onclick="location.href = \'cart.php\';">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                        </div>';
                    }              
                } else {
                    echo '<a class="login_btn" href="login.php">Login</a>';
                    echo '<a class="signup_btn" href="signup.php">Signup</a>';
                }

            ?>
            
        </div>
    </header>
