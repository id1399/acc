<?php
session_start();
$id = $_SESSION['id'];
$sel_accnt = "select * 
              from accounts as acc
              join role as r on r.id = acc.id_role
              where acc.id = $id ";
$host = "127.0.0.1";
$dbname = "db2";
$dbUsername = "root";
$dbPass = "";
$conn = new PDO(
    "mysql:host=$host;dbname=$dbname;charset=utf8",
    $dbUsername,
    $dbPass
);
$stmt = $conn->prepare($sel_accnt);
$stmt->execute();
$acc = $stmt->fetch();
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
    <form action="./edit/edit-acc-detail.php?id=<?php echo $acc[0] ?>" method="post" enctype="multipart/form-data">
        <div class="single-blog-wrapper">

            <!-- Single Blog Post Thumb -->
            <div class="single-blog-post-thumb">
                <img src="img/bg-img/bg-8.jpg" alt="">

            </div>

            <div class="container">
                <div class="ctn">
                    <div class="grid-ctn">
                        <div class="box">
                            <img src="" alt="">
                        </div>
                        <input type="file" name="avatar">
                    </div>
                    <div class="grid-ctnn">
                        <p><span>Họ tên : </span>&ensp; <input type="text" name="name" value="<?php echo $acc[4] ?>" placeholder="<?php echo $acc[4] ?>"></p>
                        <p><span>Email : </span>&ensp; <input type="text" name="email" value="<?php echo $acc['email'] ?>" placeholder="<?php echo $acc['email'] ?>"></p>
                        <p><span>Mật khẩu : </span>&ensp; ****************</p>
                        <p><span>Chức vụ : </span>&ensp; <?php echo $acc['name'] ?></p>
                        <center><button type="submit">Cập nhật</button></center>
                    </div>
                </div>
            </div>
        </div>
    </form>
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
    .ctn {
        display: grid;
        grid-template-columns: 270px 1fr;
        max-width: 980px;
        margin: auto;
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .box {

        width: 230px;
        height: 230px;
        float: left;
        border: 1px solid #999999;
    }

    .grid-ctnn {
        padding-top: 20px;
    }

    span {
        font-weight: 500;
        color: #000;
    }

    a {
        color: blue;
    }

    input {
        border: 0;
        width: 60%;
    }
</style>