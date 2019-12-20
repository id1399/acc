<?php 
session_start();
include('./db/conn.php');
include('./cart/add-cart.php');
include('./show/show-account.php');
include('./edit/edit-pwd.php');
if(!isset($_SESSION['username'])){
    header('location: formlogin.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
<?php
    include('./abc/header.php')
?>

    <!-- ##### Blog Wrapper Area Start ##### -->
    <div class="single-blog-wrapper">

        <!-- Single Blog Post Thumb -->
        <div class="single-blog-post-thumb">
            <img src="img/bg-img/bg-8.jpg" alt="">
        </div>

        <div class="container">
            <div class="ctn">
                <div class="grid-ctn">
                    <div class="box">
                        <img src="<?php echo $acc['avatar'] ?>" alt="">
                    </div>
                </div>
                <div class="grid-ctnn">
                    <form action="" method="post">
                    <?php echo $errPass ?>
                    <div>
                      Nhập mật khẩu cũ:  <input type="password" name="pass">
                    </div><br>
                    <div>
                      Nhập mật khẩu mới:  <input type="password" name="pass_new">
                    </div><br>
                    <div>
                    <div>
                      Nhập lại mật khẩu mới:  <input type="password" name="cf_pass">
                    </div><br>
                    <button type="submit" >Đổi mật khẩu</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php include('./abc/footer.php') ?>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>
<style>
    .ctn{
        display: grid;
        grid-template-columns: 270px 1fr;
        max-width: 980px;
        margin: auto;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    .box{
        
        width: 230px;
        height: 230px;
        float: left;
        border: 1px solid #999999;
    }
    .grid-ctnn{
        padding-top: 20px;
    }
    span{
        font-weight: 500;
        color: #000;
    }
    a{
        color: blue;
    }
</style>