<?php
    include('../db/conect.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $d_product = " DELETE FROM products WHERE id = $id ";
        mysqli_query($conn, $d_product);
        header('location: ../profile.php');
    }
?>