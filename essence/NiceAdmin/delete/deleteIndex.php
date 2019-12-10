<?php
    include('../db/conect.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $d_index = " DELETE FROM setting_index WHERE id = $id ";
        mysqli_query($conn, $d_index);
        header('location: ../form_index.php');
    }
?>