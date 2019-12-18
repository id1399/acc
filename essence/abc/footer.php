<?php
require_once './db/connect.php';

$sel_logo = "select logo from setting_index ";
$show_logo = executeQuery($sel_logo, true);
?>
<!-- ##### Brands Area Start ##### -->
<div class="brands-area d-flex align-items-center justify-content-between">
    <div class="single-brands-logo">
        <img src="" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img style="margin-left:20px" src="img/product-img2/bnr-logo.png" alt="">
        <p style="color: #000; font-weight:600; padding-top:20px">Sản phẩm an toàn</p>
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img style="margin-left:20px" src="img/product-img2/bnr-logo2.png" alt="">
        <p style="color: #000; font-weight:600; padding-top:20px">Chất lượng cam kết</p>
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img style="margin-left:20px" src="img/product-img2/bnr-logo3.png" alt="">
        <p style="color: #000; font-weight:600; padding-top:20px">Dịch vụ vượt trội</p>
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img style="margin-left:20px" src="img/product-img2/bnr-logo4.png" alt="">
        <p style="color: #000; font-weight:600; padding-top:20px">Giao hàng nhanh chóng</p>
    </div>
    <div class="single-brands-logo">
        <img src="" alt="">
    </div>
</div>
<!-- ##### Brands Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Widget Area -->
            <div class="col-12 col-md-6">
                <div class="single_widget_area d-flex mb-30">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <?php foreach ($show_logo as $logo) : ?>
                            <a href="#"><img src="img/core-img/<?php echo $logo['logo'] ?>" alt=""></a>
                        <?php endforeach ?>
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