<?php

session_start()

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/fonts.css">
        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/login.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/contact.css">
        <link rel="stylesheet" href="./css/shop.css">
        <link rel="stylesheet" href="./css/dash.css">
        <link rel="stylesheet" href="./css/dashProd.css">
        <link rel="stylesheet" href="./css/dashUsers.css">

        <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="progressbar"></div>
        <div id="scrollPath"></div>

        <div class="dash_container">
            <div class="dash_panel">

                <div class="dash_logo" onclick="location.href='index.php';">
                    <img src="./img/icon.png" alt="">
                </div>

                <div class="dash_nav">
                    <a href="inventory.php">Sales
                        <svg viewBox="0 0 24 24" fill="none" focusable="false" class="chakra-icon css-1xvmucc"><path d="M3 6.571c0-.746 0-1.254.029-1.648.027-.385.077-.584.138-.723A2 2 0 014.2 3.167c.14-.06.338-.11.723-.138C5.317 3 5.825 3 6.57 3c.747 0 1.255 0 1.649.029.384.027.584.077.723.138A2 2 0 019.976 4.2c.06.14.11.338.138.723.028.394.029.902.029 1.648 0 .747 0 1.255-.029 1.649-.027.384-.077.584-.138.723a2 2 0 01-1.033 1.033c-.14.06-.339.11-.723.138-.394.028-.902.029-1.649.029-.746 0-1.254 0-1.648-.029-.385-.027-.584-.077-.723-.138a2 2 0 01-1.033-1.033c-.06-.14-.11-.339-.138-.723C3 7.826 3 7.318 3 6.57zM3 17.429c0-.747 0-1.255.029-1.649.027-.384.077-.583.138-.723A2 2 0 014.2 14.024c.14-.06.338-.11.723-.138.394-.028.902-.029 1.648-.029.747 0 1.255 0 1.649.029.384.027.584.077.723.138a2 2 0 011.033 1.033c.06.14.11.339.138.723.028.394.029.902.029 1.649 0 .746 0 1.254-.029 1.648-.027.385-.077.584-.138.723a2 2 0 01-1.033 1.033c-.14.06-.339.11-.723.138C7.826 21 7.318 21 6.57 21c-.746 0-1.254 0-1.648-.029-.385-.027-.584-.077-.723-.138A2 2 0 013.167 19.8c-.06-.14-.11-.338-.138-.723C3 18.683 3 18.175 3 17.43zM13.857 6.571c0-.746.001-1.254.03-1.648.027-.385.077-.584.137-.723a2 2 0 011.034-1.033c.139-.06.338-.11.722-.138C16.174 3 16.682 3 17.43 3s1.254 0 1.648.029c.385.027.584.077.723.138A2 2 0 0120.833 4.2c.061.14.111.338.139.723.028.394.028.902.028 1.648 0 .747 0 1.255-.029 1.649-.027.384-.077.584-.138.723A2 2 0 0119.8 9.976c-.14.06-.338.11-.723.138-.394.028-.901.029-1.648.029-.747 0-1.255 0-1.649-.029-.384-.027-.583-.077-.722-.138a2 2 0 01-1.034-1.033c-.06-.14-.11-.339-.138-.723-.028-.394-.029-.902-.029-1.649zM13.857 17.429c0-.747.001-1.255.03-1.649.027-.384.077-.583.137-.723a2 2 0 011.034-1.033c.139-.06.338-.11.722-.138.394-.028.902-.029 1.649-.029s1.254 0 1.648.029c.385.027.584.077.723.138a2 2 0 011.033 1.033c.061.14.111.339.139.723.028.394.028.902.028 1.649 0 .746 0 1.254-.029 1.648-.027.385-.077.584-.138.723a2 2 0 01-1.033 1.033c-.14.06-.338.11-.723.138-.394.028-.901.029-1.648.029-.747 0-1.255 0-1.649-.029-.384-.027-.583-.077-.722-.138a2 2 0 01-1.034-1.033c-.06-.14-.11-.338-.138-.723-.028-.394-.029-.902-.029-1.648z" stroke="currentColor" stroke-width="2"></path></svg>
                    </a>

                    <a href="dashboardUsers.php">Users
                        <svg viewBox="0 0 24 25" fill="none" focusable="false" class="chakra-icon css-1ouhgs0"><path d="M12 12.8a5 5 0 100-10 5 5 0 000 10zM20.59 22.8c0-3.87-3.85-7-8.59-7s-8.59 3.13-8.59 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </a>

                    <a href="transactions.php">Transactions
                        <svg id="t" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/></svg>
                    </a>

                    <a href="dashboardProducts.php">Products
                        <svg id="t" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M547.6 103.8L490.3 13.1C485.2 5 476.1 0 466.4 0H109.6C99.9 0 90.8 5 85.7 13.1L28.3 103.8c-29.6 46.8-3.4 111.9 51.9 119.4c4 .5 8.1 .8 12.1 .8c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.2 0 49.3-11.4 65.2-29c16 17.6 39.1 29 65.2 29c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4zM499.7 254.9l-.1 0c-5.3 .7-10.7 1.1-16.2 1.1c-12.4 0-24.3-1.9-35.4-5.3V384H128V250.6c-11.2 3.5-23.2 5.4-35.6 5.4c-5.5 0-11-.4-16.3-1.1l-.1 0c-4.1-.6-8.1-1.3-12-2.3V384v64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V384 252.6c-4 1-8 1.8-12.3 2.3z"/></svg>
                    </a>
                </div>

                <div class="bot_nav">
                    <a href="index.php">Home</a>
                    <a href="shop.php">Shop</a>
                    <a href="contact.php">Contact us</a>
                    <a href="logout.php">logout
                        <svg id="t" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                    </a>
                </div>

            </div>
        </div>
