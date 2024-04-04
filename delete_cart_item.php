<?php
session_start();

if (isset($_GET['prodID'])) {
    // Get the product ID to be deleted from the query string
    $prodID = $_GET['prodID'];

    // Connect to your MySQL database
    include_once("./backend/dbh.php");

    // Delete the item from the cart based on the product ID
    $deleteQuery = mysqli_query($conn, "DELETE FROM Cart_Items WHERE prodID = $prodID");

    if ($deleteQuery) {
        // Redirect back to the cart page after deletion
        header("Location: cart.php?itemdeletedsuccessfully");
        exit();
    } else {
        echo "Error deleting cart item: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Redirect to the cart page if the product ID is not provided
    header("Location: cart.php");
    exit();
}
