<?php
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $detail_cmt = " SELECT acc.name,cmt.content,cmt.id
                    FROM accounts as acc
                    JOIN comments as cmt ON cmt.id_user = acc.id
                    WHERE cmt.id_product = $id";
    $queryDetail = mysqli_query($conn,$detail_cmt);
    }
?>