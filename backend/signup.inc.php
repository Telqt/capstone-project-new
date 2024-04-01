<?php
include_once "dbh.php";
// include_once "functions.php";

if (isset($_POST['submit'])) {
    
    $fname = mysqli_real_escape_string($conn, $_POST['fname']); 
    $lname = mysqli_real_escape_string($conn, $_POST['lname']); 
    $email = mysqli_real_escape_string($conn, $_POST['email']); 
    $password = mysqli_real_escape_string($conn, $_POST['password']); 
    $rpassword = mysqli_real_escape_string($conn, $_POST['rpassword']); 

    function emailExists($conn, $email) {
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->num_rows > 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (emailExists($conn, $email)) {
            echo "<script>alert('Email Already Exists!'); window.location.href = '../signup.php';</script>";
        } else {
            if ($password === $rpassword) {
                $pwd = password_hash($password, PASSWORD_DEFAULT); 
                $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
        
         
                if ($stmt = mysqli_prepare($conn, $sql)) {
                    mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $pwd); 
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<script>alert('User created successfully! Please Login'); window.location.href = '../login.php';</script>";
                    } else {
                        echo "Error creating user: " . mysqli_stmt_error($stmt);
                    }
                    mysqli_stmt_close($stmt);
                } else {
                    echo "Error preparing SQL statement: " . mysqli_error($conn);
                }
            } else {
                echo "
                <script>alert('Passwords do no match!'); window.location.href = '../signup.php';</script>
                ";
            }
        }
    }

    
    
}
