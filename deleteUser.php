<?php
include_once("./backend/dbh.php");

if(isset($_GET['delete'])) {

    $UID = mysqli_real_escape_string($conn, $_GET['delete']);
    
    $sql = "DELETE FROM users WHERE UID = '$UID'";
    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Record deleted.');
        
        location.href='dashboardUsers.php?=delete-success';
        
        </script>";
    } else {
        echo "<script>alert('Error deleting record:'" . mysqli_error($conn) . "');
        
        location.href='dashboardUsers.php?=delete-failed';
        
        </script>";
    }
} else {
    echo "No record to delete. 'delete' parameter not set.";
}
