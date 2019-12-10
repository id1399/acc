<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // Laays duwx lieeuj cux deer thay ddooir
        $sPr = "SELECT * FROM products WHERE id = $id ";
        $queryPr = mysqli_query($conn, $sPr);
      }
      
      if (isset($_POST['submit-products'])) {
        $id = $_GET['id'];
      
        $idcategory = $_POST['idcategory'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $price_sale = $_POST['price_sale'];
        $img = $_POST['img_new'];
        if ($_POST['img_new'] == null) {
          $img = $_POST['img'];
        }
        $description = $_POST['description'];
        $source = $_POST['source'];
      
        $upProduct = "UPDATE products 
                        SET name = '$name',price = '$price',sale_price = '$price_sale',image = '$img',
          description = '$description', source = '$source',id_category = $idcategory WHERE id = $id  ";
        mysqli_query($conn, $upProduct);
        mysqli_close($conn);
        header('location: product.php');
      }
?>