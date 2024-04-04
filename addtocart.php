<?php
session_start();

// Check if the product ID and quantity are provided
if (isset($_GET['prodID']) && isset($_GET['quantity'])) {
    $prodID = $_GET['prodID'];
    $quantity = $_GET['quantity'];
    
    // Check if the user is logged in
    if (isset($_SESSION['UID'])) {
        $UID = $_SESSION['UID'];
        
        // Connect to the database
        include_once("./backend/dbh.php");
        
        // Check if the user already has the product in their cart
        $checkQuery = mysqli_query($conn, "SELECT * FROM User_Cart WHERE UID = $UID AND prodID = $prodID");
        
        if (mysqli_num_rows($checkQuery) > 0) {
            // Product already exists in the user's cart, update quantity
            $updateQuery = mysqli_query($conn, "UPDATE User_Cart SET quantity = quantity + $quantity WHERE UID = $UID AND prodID = $prodID");
            
            if (!$updateQuery) {
                echo "Error updating cart: " . mysqli_error($conn);
            }
        } else {
            // Product does not exist in the user's cart, insert new record
            $insertQuery = mysqli_query($conn, "INSERT INTO User_Cart (UID, prodID, quantity) VALUES ($UID, $prodID, $quantity)");
            
            if (!$insertQuery) {
                echo "Error adding to cart: " . mysqli_error($conn);
            }
        }
        
        // Close the database connection
        mysqli_close($conn);
        
        // Redirect back to the previous page
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        echo "User is not logged in.";
    }
} else {
    echo "Product ID and quantity are required.";
}
