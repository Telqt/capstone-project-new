<?php 

include_once("header.php");

?>

<?php

include_once("productMainCategorypanel.php");

?>

<div class="product-right">
            <div class="products-main">



            <?php 

                include_once("./backend/dbh.php");

                $select = mysqli_query($conn,"SELECT * FROM products WHERE prodCategory = 'Bag'");

                while ($row = mysqli_fetch_array($select)) {
                    echo '
                    
                    <a href="addtocart.php?prodID='. $row['prodID'] .'" class="product">
                        <img src="' . $row['prodPicture'] . '" alt="product">
                        <p class="prodname">'. $row['prodName'] .'</p>
                        <p class="price">₱'. $row['prodPrice'] .'</p>
                        <p class="addtocart">Add to Cart</p>
                    </a>
                    
                    ';
                }
            ?>

                

            </div>
        </div>
    </div>
</div>

<?php

include_once("footer.php");

?>