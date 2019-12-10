<?php
    $id_pr = $_GET['id'];
    if(isset($_POST['submit-comment'])){
        $cmt = $_POST['comment'];
        $id = $_SESSION['id'];

        if(!isset($_SESSION['username'])){
            header('location: ./formlogin.php');
        }else{
            $insCmt = "INSERT INTO comments (id,id_user,id_product,content)
            VALUES ('',$id,$id_pr,'$cmt')";
            mysqli_query($conn,$insCmt);
        }

    }
    //Get list comment echo giao diện
    $id_pr = $_GET['id'];
    $selCmt = "SELECT acc.avatar, acc.name, cmt.content
               FROM comments as cmt
               JOIN accounts as acc ON acc.id = cmt.id_user
               WHERE cmt.id_product = $id_pr LIMIT 6";
    $querySel_cmt = mysqli_query($conn,$selCmt);


?>