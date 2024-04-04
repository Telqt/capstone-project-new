<?php


include_once("header.php");



?>


<div class="cart_wrapper">
    <div class="cart_container">

        <section>
            <nav>
                <div class="prod_colh"></div>
                <div class="prod_colh">Product name</div>
                <div class="prod_colh">Price</div>
                <div class="prod_colh">Quantity</div>
                <div class="prod_colh">Total Amount</div>
                <div class="prod_colh">Action</div>
            </nav>
        </section>

        <?php

// Check if the user is logged in
if(isset($_SESSION['UID'])) {
    $UID = $_SESSION['UID'];

    // Connect to your MySQL database
    include_once("./backend/dbh.php");

    // Retrieve user's cart ID based on their UID
    $cartQuery = mysqli_query($conn, "SELECT cartID FROM User_Cart WHERE UID = $UID");

    if ($cartQuery) {
        if (mysqli_num_rows($cartQuery) > 0) {
            $cartID = mysqli_fetch_assoc($cartQuery)['cartID'];

            // Fetch cart items based on the cart ID along with product picture
            $cartItemsQuery = mysqli_query($conn, "SELECT p.prodID, p.prodName, p.prodPrice, p.prodPicture FROM Cart_Items ci JOIN Products p ON ci.prodID = p.prodID WHERE ci.cartID = $cartID");

            if ($cartItemsQuery) {


                $sqlQuantity = mysqli_query($conn,"SELECT * FROM cart_items WHERE cartID = $cartID");

                // Display cart items
                while ($row = mysqli_fetch_assoc($cartItemsQuery) and $qrow = mysqli_fetch_assoc($sqlQuantity)) {
                    echo "
                    
                    <form class='cart_row' action='./update_cart.php' method='POST'>
                        <div class='prod_col'><img src='" . $row['prodPicture'] . "' alt=''></div>
                        <div class='prod_col'>{$row['prodName']}</div>
                        <div class='prod_col cart_item_price'>{$row['prodPrice']}</div>
                        <div class='prod_col'><input type='number' class='quantity_input' name='quantity' value='{$qrow['quantity']}' min='1'></div>
                        <div class='prod_col cart_total_amount'>{$row['prodPrice']}</div>
                        <div class='prod_col action'>
                            <button type='submit' class='update_cart' name='submit'>Update</button>
                            <input type='hidden' name='prodID' value='{$row['prodID']}'>
                            <a class='delete_cart_item' href='delete_cart_item.php?prodID={$row['prodID']}'>Delete</a>
                    </div>
                </form>";

                    }
                } else {
                    echo "Error fetching cart items: " . mysqli_error($conn);
                }
            } else {
                echo "User doesn't have a cart.";
            }
        } else {
            echo "Error retrieving user's cart: " . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
    } else {
        echo "User is not logged in."; // Handle the case where user is not logged in
    }
    ?>

</div>
</div>

<script>
// Get the elements for each item
const priceElements = document.querySelectorAll('.cart_item_price');
const quantityInputs = document.querySelectorAll('.quantity_input');
const totalAmountElements = document.querySelectorAll('.cart_total_amount');

// Function to calculate total amount for each item
function updateTotalAmount() {
    priceElements.forEach((priceElement, index) => {
        const price = parseFloat(priceElement.textContent);
        const quantity = parseInt(quantityInputs[index].value);
        const totalAmount = price * quantity;
        totalAmountElements[index].textContent = totalAmount.toFixed(2); // Displaying total amount with two decimal places
    });
}

// Attach event listener to each quantity input to update total amount when quantity changes
quantityInputs.forEach(quantityInput => {
    quantityInput.addEventListener('input', updateTotalAmount);
});

// Initial calculation of total amount
updateTotalAmount();

</script>

<?php

include_once("footer.php");

?>