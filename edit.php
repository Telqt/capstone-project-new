<?php

    include_once("dashboardPanel.php");

?>

<div class="dash_prod_container">

    <h1>EDIT PRODUCT</h1>
    <a id="add" href="dashboardProducts.php">Back</a>
    <br>

    <?php 

    include_once("./backend/dbh.php");

    $prodID = $_GET['edit'];


    $select = mysqli_query($conn, "SELECT * FROM products WHERE prodID = '$prodID'");
    if (!$select) {
        die("Error: " . mysqli_error($conn));
    }

    $row = mysqli_fetch_array($select);

    if (!$row) {
        die("Error: Product not found");
    }

    $selectedCategory = $row["prodCategory"];

    echo '
    
    <div class="addProductPanel">
        <form action="./updateProd.inc.php?edit=' . $prodID . '" method="post" enctype="multipart/form-data">
            <div class="addLeftPanel">
                <p>Basic Information</p>
                <div class="nameDescPanel">
                    <p>Product Name</p>
                    <input type="text" name="productname" required autocomplete="off" value="'. $row["prodName"] .'">
                    <p>Product Description</p>
                    <textarea id="desc" type="text" name="productdesc" required autocomplete="off">'. $row["prodDesc"] .'</textarea>
                        <p>Category</p>                        
                        <select type="text" id="sel" name="category" required>
                            <option value="Bag">Bag</option>
                            <option value="Bags with Frame">Bags with Frame</option>
                            <option value="Back to Back Vest">Back to Back Vest</option>
                            <option value="Bandolier">Bandolier</option>
                            <option value="Parts">Parts</option>
                            <option value="Accessories">Accessories</option>
                            <option value="Boots">Boots</option>
                        </select>
                        <p>Price</p>
                        <input id="price" type="number" name="price" required autocomplete="off" value="'. $row["prodPrice"] .'">
                        <h2>PHP</h2>
                    </div>
                </div>
                <div class="addRightPanel">
                    <p>Product Image</p>
                    <div class="imgPanel">
                        <img id="outputImg" src="' . $row["prodPicture"] . '" alt="">
                        <input id="imgInp" type="file" name="productphoto" accept="image/*" autocomplete="off" onchange="loadFile(event)">
                    </div>
                    <input id="productSavebtn" type="submit" name="submit" value="Save Changes">
                </div>
            </form>
        </div>

        <script>
            document.getElementById("sel").value = "' . $selectedCategory . '";
        </script>
    
        ';


    ?>

</div>

<script>
  var loadFile = function(event) {
    var output = document.getElementById('outputImg');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>


<?php

include_once("dashboardFooter.php");

?>