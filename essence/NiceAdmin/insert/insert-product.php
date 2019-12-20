<?php
        $messeger = "";
    if (isset($_POST['submit-product'])) {
        $idcategory = $_POST['idcategory'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $img = $_POST['img'];
        $description = $_POST['description'];
        $source = $_POST['source'];

        $vld_pr = "SELECT * FROM products WHERE name = '$name' ";
        $vldQr_pr = mysqli_query($conn,$vld_pr);
        $numVld_pr = mysqli_num_rows($vldQr_pr);

        // $file_name="";
        // if($img['size'] > 0){
        //     $file_name='uploads/'.uniqid()."-".$img['name'];
        //     move_uploaded_file($img['tmp_name'], $file_name);
        // }
        if($numVld_pr == 1){
          $messeger = " Đã có loại hàng này ";
        }else if($name == ""){
          $messeger = " Hãy nhập tên ";
        }else if($price == ""){
          $messeger = " Hãy nhập giá ";
        }else if($source == ""){
          $messeger = " Hãy nhập nguồn gốc ";
        }else{
          $insProduct = "INSERT INTO products(name,sale_price,image,description,source,id_category)
                         VALUES('$name','$price','$img','$description','$source',$idcategory)";
          mysqli_query($conn, $insProduct);
          header('location: ./product.php');
        }


      }
?>