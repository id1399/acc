<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        // hien thi du lieu ra de sua
        $selpr_index = "SELECT * FROM setting_index WHERE id = $id ";
        $query_selpr = mysqli_query($conn,$selpr_index);
    }

    if(isset($_POST['submit-setting'])){
        $id = $_GET['id'];
        $logo = $_POST['logo_new'];
        if($_POST['logo_new'] == null){
            $logo = $_POST['logo'];
        }
        $banner = $_POST['banner_new'];
        if($_POST['banner_new'] == null){
            $banner = $_POST['banner'];
        }
        $title_small = $_POST['title_small'];
        $title = $_POST['title'];
       
        $upSet = "UPDATE setting_index SET logo = '$logo',banner = '$banner',title_small = '$title_small',title ='$title' WHERE id = $id ";
        mysqli_query($conn,$upSet);
        mysqli_close($conn);
        header('location: form_index.php');
    }
