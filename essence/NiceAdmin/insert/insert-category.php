<?php
    $messager = "";
    if(isset($_POST['submit-category'])){
        $name = $_POST['name'];
        $sel_numCategory = "SELECT * FROM categories WHERE name = '$name'";
        $querynum = mysqli_query($conn,$sel_numCategory);
        $numCC = mysqli_num_rows($querynum);

        if($numCC == 1){
          $messager = "Đã có danh mục này";
        }else if($name == ""){
          $messager = "Không để trống";
        }
        else{
          $insCategory = "INSERT INTO categories(name,show_menu)
          VALUE('$name',0)";
          mysqli_query($conn,$insCategory);
          $messager = "Thêm thành công";
          header('location: ./category.php');
        }
        
      }
?>