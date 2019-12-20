<?php
session_start();

include('./cart/add-cart.php');
include('./show/show-account.php');
include('./db/conn.php');
include('./show/show-order.php');
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
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>Billing Address</h5>
                        </div>

                        <?php if (!isset($_SESSION['username'])) {
                            echo '
                            <form action="./cart/checkout-cart.php" method="post">
                            <div class="row">
                                    <input type="hidden" name="user_id" value="null" readonly>
                                <div class="col-12 mb-3">
                                    <label for="company">Full Name</label>
                                    <input type="text" class="form-control" id="company" name="name_order" value="">
                                    <h4 style="color: red">'.isset($_GET['errName']).'</h4>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">Email Address <span>*</span></label>
                                    <input type="email" class="form-control" name="email" id="email_address" value="">
                                    <h4 style="color: red">'.isset($_GET['errEmail']).'</h4>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Phone No <span>*</span></label>
                                    <input type="number" class="form-control" name="phone" id="phone_number" min="0" value="">
                                    <h4 style="color: red">'.isset($_GET['errPhone']).'</h4>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="street_address">Note <span>*</span></label>
                                    <textarea style="width: 100%;border: 1px solid #ebebeb" name="note" id="" cols="30" placeholder="
- Nhập địa chỉ vào đây...
- Yêu cầu thêm ..." rows="10">
</textarea>
<h4 style="color: red">'.isset($_GET['errNote']).'</h4>
                                </div>
                            </div>
                                <button class="btn essence-btn" type="submit" >Place Order</button>
                        </form>';
                        } else {
                            echo '
                            <form action="./cart/checkout-cart.php" method="post">
                            <div class="row">
                                    <input type="hidden" name="user_id" value="' . $_SESSION['id'] . '" readonly>
                                <div class="col-12 mb-3">
                                    <label for="company">Full Name</label>
                                    <input type="text" class="form-control" name="name_order" id="company" value="' . $acc[4] . '" readonly>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">Email Address <span>*</span></label>
                                    <input type="email" class="form-control" name="email" id="email_address" value="' . $acc['email'] . '" readonly>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Phone No <span>*</span></label>
                                    <input type="number" class="form-control" name="phone" id="phone_number" min="0" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="street_address">Note <span>*</span></label>
                                    <textarea style="width: 100%;border: 1px solid #ebebeb" name="note" id="" cols="30" placeholder="
- Nhập địa chỉ vào đây...
- Yêu cầu thêm ..." rows="10">
</textarea>
                                </div>
                                </div>
                                    <button class="btn essence-btn" type="submit" >Place Order</button>
                            </form>';
                        } ?>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>Your Order</h5>
                            <p>The Details</p>
                        </div>

                        <ul class="order-details-form mb-4">
                            <li><span>Product</span><span>Total</span></li>
                            <?php while ($row = mysqli_fetch_row($showQr_detail)) {
                                echo '
                                <li><span>' . $row[3] . '</span> <span style="text-transform: none;" >Qty: ' . $row[6] . '</span> <span>' . '$' . $row[7] . '</span></li>
                                ';
                            } ?>
                            <li><span>Subtotal</span> <span><?php echo "$".$pri['total']?></span></li>
                            <li><span>Shipping</span> <span>FREE</li>
                            <li><span>Total</span> <span><?php echo "$".$pri['total']?></span></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->

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