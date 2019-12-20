<?php
session_start();
include('./cart/add-cart.php');
if (!isset($_SESSION['username'])) {
    header('location: formlogin.php');
}
include('./show/show-account.php');
include('./db/conn.php');
include('./show/show-order.php')


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
                <caption>Lịch sử giao dịch</caption>
                    <table >
                        <tr>
                            <td>Mã Order</td>
                            <td>Tên</td>
                            <td>Tổng tiền</td>
                            <td>Trạng thái</td>
                            <td style="border: 0"></td>
                            <td style="border: 0"></td>
                            <td style="border: 0"></td>
                        </tr>  
                        <?php while($row = mysqli_fetch_row($showQr_order)) {
                            $id = $row[0];
                            $del = "";
                            $check = "";
                            if($row[7] == 1 ){
                                $del = $del.'<a href="./show/del-order.php?id='.$id.'">Hủy Order</a>';
                                $check = $check.'<a href="checkout.php?id='.$id.'">Thanh toán</a>';
                            }else{
                                $del = "";
                                $check = "";
                            }
                            echo '
                            <tr>
                                <td>'.$row[0].'</td>
                                <td>'.$row[2].'</td>
                                <td>'.$row[6].'</td>
                                <td>'.$row[9].'</td>
                                <td style="border: 0">'.$del.'</td>
                                <td style="border: 0">'.$check.'</td>
                                <td style="border: 0"><a href="history-detail.php?id='.$id.'">Chi Tiết</a></td>
                            </tr>
                            ';
                        } ?>
                        
                    </table><br>
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
    table{
        width: 100%;
        text-align: center;
    }

    td{
        border: 1px solid ;
    }
</style>