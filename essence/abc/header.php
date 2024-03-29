<?php
require_once './db/connect.php';
$sqlGetMenus = "select * from categories where show_menu = 1 ";
$menus = executeQuery($sqlGetMenus, true);

$sel_logo = "select logo from setting_index ";
$show_logo = executeQuery($sel_logo, true);
?>
<!-- ##### Header Area Start ##### -->
<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <?php foreach ($show_logo as $logo) : ?>
                <a class="nav-brand" style="width:14%" href="index.php"><img style="width:100%" src="img/core-img/<?php echo $logo['logo'] ?>" alt=""></a>
            <?php endforeach ?>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
                <!-- close btn -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="https://www.facebook.com/">Pages</a></li>

                        <li><a href="shop.php">Category</a>
                            <ul class="dropdown">
                                <?php foreach ($menus as $menu) : ?>
                                    <li><a href="shop.php?id=<?php echo $menu['id'] ?>"><?php echo $menu['name'] ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                        <?php 
                            if(!isset($_SESSION['username'])){
                                echo '';
                            }else{
                                echo '<li><a href="history.php">Transaction history</a></li>';
                            }
                        ?>
                    </ul>
                </div>
                <!-- Nav End -->
            </div>
        </nav>

        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">
            <!-- Search Area -->
            <div class="search-area">
                <form action="search.php" method="get">
                    <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                    <button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- Favourite Area -->
            <div class="user-login-info">
                <?php
                if (!isset($_SESSION['username'])) {
                    echo '';
                } else {
                    echo '<a href="user-detail.php"><img src="img/core-img/user.svg" alt=""></a>';
                }
                ?>

            </div>
            <?php
            if (!isset($_SESSION['username']) || $_SESSION['id_role'] != 1 && $_SESSION['id_role'] != 3) {
                echo '';
            } else {
                echo '<div class="favourite-area"><a href="./NiceAdmin/index.php">Admin</a></div>';
            }
            ?>
            <!-- User Login Info -->
            <div class="user-login-info">
                <?php
                if (!isset($_SESSION['username'])) {
                    echo '<a href="./formlogin.php"><img src="img/core-img/user.svg" alt=""></a>';
                } else {
                    echo '<a href="./logout.php">Log Out</a>';
                }
                ?>

            </div>
            <!-- Cart Area -->
            <div class="cart-area">
                <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span> <?php echo count($cart) ?></span></a>

            </div>
        </div>

    </div>
</header>
<!-- ##### Header Area End ##### -->
<!-- ##### Right Side Cart Area ##### -->
<div class="cart-bg-overlay"></div>

<div class="right-side-cart-area">

    <!-- Cart Button -->
    <div class="cart-button">
        <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span><?php echo count($cart) ?></span></a>
    </div>

    <div class="cart-content d-flex">
        <!-- Cart List Area -->

        <div class="cart-list">
            <?php
            $total = 0;
             foreach ($cart as $key => $item) {
                 $totalQty = ($item->sale)*($item->qty);
                 $total = $total + $totalQty;
                echo '
            <div class="single-cart-item">
                <div class="product-image">
                    <img src="img/product-img2/' . $item->img . '" class="cart-thumb" alt="">
                    <!-- Cart Item Desc -->
                    <div class="cart-item-desc">
                        <a href="./abc/remove-cart.php?id=' . $item->id . '" ><span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span></a>
                        <span class="badge">' . $item->soce . '</span>
                        <h6 style="margin:0">' . $item->name . '</h6>
                        <div><span style="color:#fff;" >Qty:</span> <input style="width:70px;" type="number" name="qty" value="'.$item->qty.'" readonly></div>
                        <p style="margin:0" class="price">$' . $totalQty . '</p>
                    </div>
                </div>
            </div>
            <!-- Single Cart Item -->
            ';
            }
            ?>
        </div>
        <!-- Cart Summary -->
        <div class="cart-amount-summary">
            <h2>Summary</h2>
            <ul class="summary-table">
                <li><span>subtotal:</span> <span>$<?php echo $total ?></span></li>
                <li><span>delivery:</span> <span>Free</span></li>
                <li><span>discount:</span> <span>-0%</span></li>
                <li><span>total:</span> <span>$<?php echo $total ?></span></li>      
            </ul>
            <div class="checkout-btn mt-100">
                <?php 
                    if(!isset($_SESSION['username'])){
                        echo '
                        <form action="./cart/add-order.php" method="post">
                            <button class="btn essence-btn" type="submit" name="ins_order" >Check out</button>
                            <input type="hidden" name="id_user" value="null">
                            <input type="hidden" name="name" value="">
                            <input type="hidden" name="email" value="">
                        </form>
                        ';
                    }else{
                        echo '
                        <form action="./cart/add-order.php" method="post">
                        <button class="btn essence-btn" type="submit" name="ins_order" >Check out</button>
                            <input type="hidden" name="id_user" value="'.$_SESSION['id'].'">
                            <input type="hidden" name="name" value="'.$acc[4].'">
                            <input type="hidden" name="email" value="'.$acc['email'].'">
                        </form>
                        ';
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- ##### Right Side Cart End ##### -->