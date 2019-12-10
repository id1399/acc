<?php
    $comment = "SELECT COUNT(cmt.id) as sl,pr.name, pr.id
                FROM products as pr
                JOIN comments as cmt ON cmt.id_product = pr.id
                GROUP BY pr.name ";
    $queryCmt = mysqli_query($conn,$comment);
?>