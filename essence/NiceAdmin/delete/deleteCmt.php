<?php

    include('../db/conect.php');
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $del_cmt = "DELETE FROM comments WHERE id = $id";
    mysqli_query($conn,$del_cmt);
    header('location: ../chitietcmt.php?id=1');
    }
?>