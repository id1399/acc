<?php
    if (isset($_POST['submit-product'])) {
        $idcategory = $_POST['idcategory'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $img = $_POST['img'];
        $description = $_POST['description'];
        $source = $_POST['source'];

        $insProduct = "INSERT INTO products(name,sale_price,image,description,source,id_category)
                         VALUES('$name','$price','$img','$description','$source',$idcategory)";
        mysqli_query($conn, $insProduct);
      }
?>