<?php

include_once("dashboardPanel.php");

?>


<div class="dash_prod_container">
    <h1>PRODUCTS</h1>
    <a id="add" href="addProduct.php">Add Product</a>
</div>


<div class="product-display">
    <section>
        <nav>
            <div class="colh">Product Image</div>
            <div class="colh">Product Name</div>
            <div class="colh">Product Price</div>
            <div class="colh">Product Category</div>
            <div class="colh">Action</div>
        </nav>
    </section>

    <?php 
        include_once("./backend/dbh.php");

        $select = mysqli_query($conn,"SELECT * FROM products");

        while ($row = mysqli_fetch_array($select)) {
            echo "
            <div class='row'>
                <dialog class='modal' id='modal" . $row["prodID"] . "'>
                    <p>Are you sure you want to delete the record?</p>
                    <a class='delete' href='delete.php?delete=" . $row["prodID"] . "'>Yes</a>
                    <button class='delete close-modal'>No</button>
                </dialog>
                <div class='col'><img src='" . $row['prodPicture'] ."'></div>
                <div class='col'>" . $row['prodName'] ."</div>
                <div class='col'>₱" . $row['prodPrice'] ."</div>
                <div class='col'>" . $row['prodCategory'] ."</div>
                <div class='col'>
                    <a class='edit' href='edit.php?edit=" . $row['prodID'] ."'>Edit</a>
                    <button class='delete open-modal' data-modal-id='modal" . $row["prodID"] . "'>Delete</button>
                </div>
            </div>
            ";
        }
    ?>

    
</div>

<script>
const openModals = document.querySelectorAll('.open-modal');
const closeModals = document.querySelectorAll('.close-modal');

openModals.forEach(openModal => {
    openModal.addEventListener('click', (event) => {
        const modalId = event.target.getAttribute('data-modal-id');
        const modal = document.getElementById(modalId);
        modal.showModal();
    });
});

closeModals.forEach(closeModal => {
    closeModal.addEventListener('click', (event) => {
        const modal = event.target.closest('dialog');
        modal.close();
    });
});
</script>

<?php


include_once("dashboardFooter.php");

?>