<?php
session_start();

include_once("./backend/dbh.php");


if (isset($_POST['submit'])) {
    // Get the product ID and quantity from the form
    $prodID = $_POST['prodID'];
    $quantity = $_POST['quantity'];

    // Update the quantity of the cart item
    $updateQuery = mysqli_query($conn, "UPDATE Cart_Items SET quantity = $quantity WHERE prodID = $prodID");

    if ($updateQuery) {
        // Redirect back to the cart page after updating
        header("Location: cart.php?updatedSuccessfully");
        exit();
    } else {
        echo "Error updating cart item: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Redirect to the cart page if the update button wasn't clicked
    header("Location: cart.php");
    exit();
}

