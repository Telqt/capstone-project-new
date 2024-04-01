<?php

include_once("dashboardPanel.php");

?>


<div class="dash_users_container">
    <h1>Users</h1>

    <div class="dash_users_display">
        <section>
            <nav>
                <div class="colh">User ID</div>
                <div class="colh">First name</div>
                <div class="colh">Last Name</div>
                <div class="colh">E-mail</div>
                <div class="colh">Photo</div>
                <div class="colh">Action</div>
            </nav>
        </section>

        <?php 
        include_once("./backend/dbh.php");

        $select = mysqli_query($conn,"SELECT * FROM users WHERE UID != 1");

        while ($row = mysqli_fetch_array($select)) {
            echo "
            <div class='row'>
                <dialog class='modal' id='modal" . $row["UID"] . "'>
                    <p>Are you sure you want to delete the record?</p>
                    <a class='delete' href='deleteUser.php?delete=" . $row["UID"] . "'>Yes</a>
                    <button class='delete close-modal'>No</button>
                </dialog>
                <div class='col'>" . $row['UID'] ."</div>
                <div class='col'>" . $row['firstname'] ."</div>
                <div class='col'>" . $row['lastname'] ."</div>
                <div class='col'>" . $row['email'] ."</div>
                <div class='col'><img src='" . $row['ppicture'] ."'></div>
                <div class='col'>
                    <button class='delete open-modal' data-modal-id='modal" . $row["UID"] . "'>Delete</button>
                </div>
            </div>
            ";
        }
    ?>
    </div>
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