<?php
    include('../db/conect.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $d_category = " DELETE FROM categories WHERE id = $id ";
        mysqli_query($conn, $d_category);       
        header('location: ../category.php');
    }
?>