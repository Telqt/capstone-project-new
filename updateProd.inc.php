<?php

include_once("./backend/dbh.php");

$prodID = $_GET["edit"];
$prodName = $_POST["productname"];
$prodDesc = $_POST["productdesc"];
$prodCategory = $_POST["category"];
$prodPrice = $_POST["price"];
$productphoto = $_FILES['productphoto'];

date_default_timezone_set('UTC');
$prodTimeAdd = date('Y-m-d H:i:s');

$target_dir = "./uploads/"; 
$target_file = $target_dir . basename($productphoto["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if ($uploadOk == 1) {
    if (move_uploaded_file($productphoto["tmp_name"], $target_file)) {

      $sql = "UPDATE products SET prodName = '$prodName', prodDesc = '$prodDesc', prodCategory = '$prodCategory', prodPrice = '$prodPrice', prodPicture = '$target_file' WHERE prodID = '$prodID'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_query($conn, $sql)) {
          echo "<script>alert('Product and Image has been updated.');
          
          location.href='./dashboardProducts.php';
          
          </script>";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
        
    } else {
        $sql = "UPDATE products SET prodName = '$prodName', prodDesc = '$prodDesc', prodCategory = '$prodCategory', prodPrice = '$prodPrice' WHERE prodID = '$prodID'";
        $result = mysqli_query($conn, $sql);
      
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Product has been updated.');
            
            location.href='./dashboardProducts.php';
            
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
        $uploadOk = 0;
    }
}


