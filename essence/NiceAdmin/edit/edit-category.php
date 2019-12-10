<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // hiển thị dữ liệu cũ để sửa
        $sidCategory = " select * from categories where id = $id ";
        $querySid = mysqli_query($conn, $sidCategory);
      }
      if (isset($_POST['submit-update'])) {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $checkbox = $_POST['checkbox'];
      
        $sUpdate = " UPDATE categories SET name = '$name',show_menu = $checkbox WHERE id = $id ";
        mysqli_query($conn, $sUpdate);
        header('location: category.php');
      }
?>