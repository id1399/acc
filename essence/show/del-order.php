<?php
    include('../db/conn.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delOrder = "DELETE FROM bill_order WHERE id = $id";
    mysqli_query($conn,$delOrder);
    header('location: ../history.php');
}
?>