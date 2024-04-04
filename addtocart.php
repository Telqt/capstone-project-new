<?php
session_start();


if (isset($_GET['prodID']) && isset($_GET['quantity'])) {
    $prodID = $_GET['prodID'];
    $quantity = $_GET['quantity'];
    



    if (isset($_SESSION['UID'])) {
        $UID = $_SESSION['UID'];
        
        include_once("./backend/dbh.php");

        //check if user has cart
        $sql = mysqli_query($conn, "SELECT * FROM user_cart WHERE UID = $UID");

        //if user has cart, go here
        if (mysqli_num_rows($sql) > 0) {

            //check if the added product is already in the cart
            $checkQuery = mysqli_query($conn, "SELECT * FROM users AS U JOIN user_cart AS UC ON U.UID = UC.UID JOIN cart_items AS CI ON UC.cartID = CI.cartID WHERE CI.prodID = $prodID;");
        
            if (mysqli_num_rows($checkQuery) > 0) {

                // if the product exists in the cart, add quantity
                $row = mysqli_fetch_assoc($checkQuery);
                $cartID = $row["cartID"];

                $updateQuery = mysqli_query($conn, "UPDATE cart_items AS CI JOIN user_cart AS UC ON UC.cartID = CI.cartID SET CI.quantity = CI.quantity + $quantity  WHERE CI.cartID = $cartID AND CI.prodID = $prodID;");

                
                if (!$updateQuery) {
                    echo "Error updating cart: " . mysqli_error($conn);
                }
                
                header("Location: " . $_SERVER['HTTP_REFERER']. "?addedtocart");
                exit();
            } 
            else {
                //if the product is new to the cart
                // insert product to created cart

                $getCartID = mysqli_query($conn,"SELECT * FROM user_cart WHERE UID = $UID");
                $row = mysqli_fetch_assoc($getCartID);
                $cartID = $row["cartID"];

                $insertProd = mysqli_query($conn,"INSERT INTO cart_items (cartID, prodID, quantity) VALUES ($cartID, $prodID, $quantity)");

                header("Location: " . $_SERVER['HTTP_REFERER']. "?addedtocart");
                exit();
            } 
        } else {
        //if user does not have cart, go here
        // create a new cart for user
        $insertCart = mysqli_query($conn, "INSERT INTO user_cart (UID) VALUES ($UID)");
        $getCartID = mysqli_query($conn,"SELECT * FROM user_cart WHERE UID = $UID");

        $row = mysqli_fetch_assoc($getCartID);
        $cartID = $row["cartID"];

        // insert product to created cart
        $insertProd = mysqli_query($conn,"INSERT INTO cart_items (cartID, prodID, quantity) VALUES ($cartID, $prodID, $quantity)");

        mysqli_close($conn);
        

        header("Location: " . $_SERVER['HTTP_REFERER']. "?addedtocart");
        exit();
        }
    } else {
        echo "User is not logged in.";
    }
} else {
    echo "Product ID and quantity are required.";
}
