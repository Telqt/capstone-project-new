<?php

include_once("./backend/dbh.php");


$productname = $_POST['productname'];
$productdesc = $_POST['productdesc'];
$price = $_POST['price'];
$category = $_POST['category'];
$productphoto = $_FILES['productphoto'];

date_default_timezone_set('UTC');
$prodTimeAdd = date('Y-m-d H:i:s');  

$target_dir = "./uploads/"; 
$target_file = $target_dir . basename($productphoto["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if ($uploadOk == 1) {
    if (move_uploaded_file($productphoto["tmp_name"], $target_file)) {
        echo "<script>alert('The file ". basename($productphoto["name"]). " has been uploaded.');
        
        location.href='./addProduct.php';
        
        </script>";
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
        $uploadOk = 0;
    }
}

$sql = "INSERT INTO products (prodName, prodDesc, prodPrice, prodCategory, prodTimeAdd, prodPicture) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "ssssss", $productname, $productdesc, $price, $category, $prodTimeAdd, $target_file);

if (mysqli_stmt_execute($stmt)) {
    echo "Product added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_stmt_close($stmt);

