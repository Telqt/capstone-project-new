<?php

include_once("header.php");

?>

<div class="login-container">
    <div class="login-left">
        <h1>Login 	&#128640;</h1>
        <p>Don't have an account? <a href="signup.php">Register</a></p>


        <form action="./backend/login.inc.php" method="post">
            <div class="field">
                <input class="email" type="email" name="email" required autocomplete="off">
                <label for="email">Email</label>
                <svg viewBox="0 0 24 25" fill="none" focusable="false" class="chakra-icon css-1ouhgs0"><path d="M12 12.8a5 5 0 100-10 5 5 0 000 10zM20.59 22.8c0-3.87-3.85-7-8.59-7s-8.59 3.13-8.59 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>
            <div class="field">
                <input class="pwd" type="password" name="pwd" required autocomplete="off">
                <label for="pwd">Password</label>
                <svg viewBox="0 0 24 25" fill="none" focusable="false" class="chakra-icon css-1ouhgs0"><path d="M16.423 10.249V8.102a4.552 4.552 0 00-4.55-4.551 4.55 4.55 0 00-4.57 4.53v2.168" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path clip-rule="evenodd" d="M15.683 22.05h-7.64a3.792 3.792 0 01-3.793-3.792V13.97a3.792 3.792 0 013.792-3.792h7.641a3.792 3.792 0 013.792 3.792v4.29a3.792 3.792 0 01-3.792 3.791z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.863 15.004v2.22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                
            </div>
            <input class="submitbtn" type="submit" name="submit">
        </form>

        <!-- <form action="./backend/login.inc.php" method="post">

            <div class="field">
                <input type="email" name="email" required autocomplete="off">
                <label for="email">Email</label>
                <svg viewBox="0 0 24 25" fill="none" focusable="false" class="chakra-icon css-1ouhgs0"><path d="M12 12.8a5 5 0 100-10 5 5 0 000 10zM20.59 22.8c0-3.87-3.85-7-8.59-7s-8.59 3.13-8.59 7" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>

            <div class="field">
                <input type="password" name="password" required autocomplete="off">
                <label for="password">Password</label>
                <svg viewBox="0 0 24 25" fill="none" focusable="false" class="chakra-icon css-1ouhgs0"><path d="M16.423 10.249V8.102a4.552 4.552 0 00-4.55-4.551 4.55 4.55 0 00-4.57 4.53v2.168" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path clip-rule="evenodd" d="M15.683 22.05h-7.64a3.792 3.792 0 01-3.793-3.792V13.97a3.792 3.792 0 013.792-3.792h7.641a3.792 3.792 0 013.792 3.792v4.29a3.792 3.792 0 01-3.792 3.791z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.863 15.004v2.22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>
            
            <input class="submitbtn" type="submit" name="submit" value="LOGIN">
        </form> -->
    </div>
    <div class="login-right">
        <img src="./img/login.png" alt="login">
        <p>Our products are made of orignal Cordura 1000D fabric and HD420 fabric, with original accessories that can support what you do.</p>
    </div>
</div>
