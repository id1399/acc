<?php
session_start();
include('./db/conn.php');
include('./show/showbanner.php');
include('./cart/add-cart.php');
$selTopPr = "SELECT * FROM products ORDER BY view DESC LIMIT 4 ";
$queryTopPr = mysqli_query($conn, $selTopPr);

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>

<body>
    <?php
    include('./abc/header.php');
    ?>
    <!-- ##### Welcome Area Start ##### -->
    <?php
    while ($row = mysqli_fetch_row($queryBanner)) {
        $_SESSION['name'] = $name;
        $hello = "";
        if (isset($_SESSION['username'])) {
            $hello = $hello . 'Xin chào';
        } else {
            $hello = $hello . '';
        }
        echo '
    <section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/' . $row[2] . ');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="hero-content" style="    background: #000000b0;
                    width: 51%;
                    border-radius: 37px;
                    padding: 35px 35px;">
                        <h4 style ="color: #fff">' . $hello . '-' . $_SESSION['username'] . '</h4>
                        <h6 style ="color: #b1aeae">' . $row[3] . '</h6>
                        <h2 style ="color: #fff">' . $row[4] . '</h2>
                        <a href="#" class="btn essence-btn">view collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
            ';
    }
    ?>

    <!-- ##### Welcome Area End ##### -->
    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
                <center><h3 style="padding-bottom: 30px; font-weight:600;">RECOMMENDED</h3></center>
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/product-img2/qua-tet.jpeg);">
                        <div class="catagory-content">
                            <a href="shop.php?id=14">Tet gifts</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/product-img2/bia.jpg);">
                        <div class="catagory-content">
                            <a href="shop.php?id=16">Beer</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/product-img2/banh-keo.jpg);">
                        <div class="catagory-content">
                            <a href="shop.php?id=17">Pie-Candy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->
    <!-- ##### CTA Area Start ##### -->
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url(img/product-img2/banner-tet-sum-vay.png);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text" style="padding-top: 270px; padding-right: 10px">
                                <h6 style="font-weight:600">-30%</h6>
                                <h2>All Tet Gift Basket</h2>
                                <a href="shop.php?id=14" class="btn essence-btn">Watch now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->
    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>HOT Products</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img" style = "height: 200px;">
                            <img src="img/product-img2/chivas.jpg" alt="">
                            <!-- Hover Thumb -->
                            <!-- <img class="hover-img" src="img/product-img2/snack.jpg" alt=""> -->
                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>Nguồn'</span>
                            <a href="single-product-details.php">
                                <h6>Sản phẩm A</h6>
                            </a>
                            <p class="product-price">$123123</p>
   
                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <form action="" method="post">
                                        <button type="submit" class="btn essence-btn" name="addToCart">Add to Cart</button>
                                        <input type="hidden" name="product_id" value ="' . $id . '">
                                        <input type="hidden" name="source" value ="' . $row[6] . '">
                                        <input type="hidden" name="name" value ="' . $row[1] . '">
                                        <input type="hidden" name="sale_price" value ="' . $row[3] . '">
                                        <input type="hidden" name="image" value ="' . $row[4] . '">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img" style = "height: 200px;">
                            <img src="img/product-img2/chivas.jpg" alt="">
                            <!-- Hover Thumb -->
                            <!-- <img class="hover-img" src="img/product-img2/snack.jpg" alt=""> -->
                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>Nguồn'</span>
                            <a href="single-product-details.php">
                                <h6>Sản phẩm B</h6>
                            </a>
                            <p class="product-price">$123123</p>
   
                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <form action="" method="post">
                                        <button type="submit" class="btn essence-btn" name="addToCart">Add to Cart</button>
                                        <input type="hidden" name="product_id" value ="' . $id . '">
                                        <input type="hidden" name="source" value ="' . $row[6] . '">
                                        <input type="hidden" name="name" value ="' . $row[1] . '">
                                        <input type="hidden" name="sale_price" value ="' . $row[3] . '">
                                        <input type="hidden" name="image" value ="' . $row[4] . '">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img" style = "height: 200px;">
                            <img src="img/product-img2/chivas.jpg" alt="">
                            <!-- Hover Thumb -->
                            <!-- <img class="hover-img" src="img/product-img2/snack.jpg" alt=""> -->
                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>Nguồn'</span>
                            <a href="single-product-details.php">
                                <h6>Sản phẩm C</h6>
                            </a>
                            <p class="product-price">$123123</p>
   
                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <form action="" method="post">
                                        <button type="submit" class="btn essence-btn" name="addToCart">Add to Cart</button>
                                        <input type="hidden" name="product_id" value ="' . $id . '">
                                        <input type="hidden" name="source" value ="' . $row[6] . '">
                                        <input type="hidden" name="name" value ="' . $row[1] . '">
                                        <input type="hidden" name="sale_price" value ="' . $row[3] . '">
                                        <input type="hidden" name="image" value ="' . $row[4] . '">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img" style = "height: 200px;">
                            <img src="img/product-img2/chivas.jpg" alt="">
                            <!-- Hover Thumb -->
                            <!-- <img class="hover-img" src="img/product-img2/snack.jpg" alt=""> -->
                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>Nguồn'</span>
                            <a href="single-product-details.php">
                                <h6>Sản phẩm D</h6>
                            </a>
                            <p class="product-price">$123123</p>
   
                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <form action="" method="post">
                                        <button type="submit" class="btn essence-btn" name="addToCart">Add to Cart</button>
                                        <input type="hidden" name="product_id" value ="' . $id . '">
                                        <input type="hidden" name="source" value ="' . $row[6] . '">
                                        <input type="hidden" name="name" value ="' . $row[1] . '">
                                        <input type="hidden" name="sale_price" value ="' . $row[3] . '">
                                        <input type="hidden" name="image" value ="' . $row[4] . '">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

    <!-- ##### New Arrivals Area Start ##### -->
    <section class="new_arrivals_area section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>TOP 4 Popular Products</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <?php
                        while ($row = mysqli_fetch_row($queryTopPr)) {
                            $id = $row[0];
                            echo '
                        <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img" style = "height: 200px;">
                            <img src="img/product-img2/' . $row[4] . '" alt="">
                            <!-- Hover Thumb -->
                            <!-- <img class="hover-img" src="img/product-img2/snack.jpg" alt=""> -->
                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span>' . $row[6] . '</span>
                            <a href="single-product-details.php?id='.$id.'">
                                <h6>' . $row[1] . '</h6>
                            </a>
                            <p class="product-price">$' . $row[3] . '</p>
                            <p class="iiin"><img style="max-width: 15px;" src="./img/product-img2/eye-solid.svg" alt=""></p>
                            <p class="iiin abc">' . $row[7] . '</p>
   
                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <form action="" method="post">
                                        <button type="submit" class="btn essence-btn" name="addToCart">Add to Cart</button>
                                        <input type="hidden" name="product_id" value ="' . $id . '">
                                        <input type="hidden" name="source" value ="' . $row[6] . '">
                                        <input type="hidden" name="name" value ="' . $row[1] . '">
                                        <input type="hidden" name="sale_price" value ="' . $row[3] . '">
                                        <input type="hidden" name="image" value ="' . $row[4] . '">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                        ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->
    <?php
    include('./abc/footer.php');
    ?>


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
    .iiin{
        display: inline-block;
    }
    .abc{
        padding-left: 5px;
    }
</style>