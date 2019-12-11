<?php
session_start();
include('./cart/add-cart.php');
require_once './db/connect.php';
include('./db/conn.php');
include('./comment/getComment.php');
include('./edit/edit-view.php');
//select
$selectPr = "select * from products ";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $selectPr = "select * from products where id = $id";
}
$queryPr = executeQuery($selectPr, true);


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
    include('./abc/header.php');
    ?>

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <?php foreach ($queryPr as $pr) : ?>
                    <img src="img/product-img2/<?php echo $pr['image'] ?>" alt="">
                    <img src="img/product-img2/<?php echo $pr['image'] ?>" alt="">
                    <img src="img/product-img2/<?php echo $pr['image'] ?>" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">


            <span><?php echo $pr['source'] ?></span>
            <a href="#">
                <h2><?php echo $pr['name'] ?></h2>
            </a>
            <p class="product-price"><span class="old-price">$<?php echo $pr['price'] ?></span> $<?php echo $pr['sale_price'] ?></p>
            <p class="product-desc"><?php echo $pr['description'] ?></p>
            <p class="product-desc">View : <?php echo $pr['view'] ?></p>
        
        <!-- Form -->
        <form class="cart-form clearfix" method="post">
            <!-- Select Box -->
            <div class="select-box d-flex mt-50 mb-30">
            </div>
            <!-- Cart & Favourite Box -->
            <div class="cart-fav-box d-flex align-items-center">
                <!-- Cart -->
                <form action="" method="post">
                    <button type="submit" class="btn essence-btn" name="addToCart">Add to Cart</button>
                    <input type="hidden" name="product_id" value ="<?php echo $pr['id'] ?>">
                    <input type="hidden" name="source" value ="<?php echo $pr['source'] ?>">
                    <input type="hidden" name="name" value ="<?php echo $pr['name'] ?>">
                    <input type="hidden" name="sale_price" value ="<?php echo $pr['sale_price'] ?>">
                    <input type="hidden" name="image" value ="<?php echo $pr['image'] ?>">
                </form>
                <?php endforeach ?>
                <!-- Favourite -->
                <div class="product-favourite ml-4">
                    <a href="#" class="favme fa fa-heart"></a>
                </div>
            </div>
        </form>

        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->
    <section>

        <table class="table">
            <thead>
                <tr>
                    <th class="colm" scope="col">
                        <img class="sign-img" src="./img/product-img2/kit.jpg" alt="">
                    </th>
                    <th scope="col">
                        <form id="frm-comment" action="" method="post">
                            <div class="input-row">
                                <input class="input-field click" type="text" name="comment" id="comment" required=""></textarea>
                                <input type="hidden" value="Gửi" name="submit-comment" />
                            </div>
                        </form>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_row($querySel_cmt)) {
                    
                    echo '
                <tr>
                    <td scope="row"><img class="sign-img" src="./img/product-img2/kit.jpg" alt=""></td>
                    <td class="hg"><span>'.$row[1].'</span> &nbsp; '.$row[2].'</td>
                </tr>
                        ';
                }
                ?>


            </tbody>
        </table>
    </section>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
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
    .sign-img {
        width: 50px;
        border-radius: 100%;
        border: 1px solid #9999;
    }

    .input-field {
        width: 40%;
        height: 39px;
        margin-left: 2px;

        border: 1px solid #99999938;
        border-radius: 20px 20px 20px 20px
    }

    .colm {
        width: 5%;
    }

    td.hg {
        margin: 0;
        padding: 23px 20px;
    }

    td.hg span {
        font-weight: 600;
    }
</style>