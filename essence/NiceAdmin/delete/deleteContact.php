<?php
    include('../db/conect.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $d_contact = " DELETE FROM setting_contact WHERE id = $id ";
        mysqli_query($conn, $d_contact);
        header('location: ../form_contact.php');
    }
?>