<?php
    session_start();
    include('./cart/add-cart.php');

    $sel_contact = "SELECT * FROM setting_contact ";

    $host = "127.0.0.1";
    $dbname = "db2";
    $dbusername = "root";
    $dbpass = "";
    
    $conect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbusername, $dbpass);
    //nạp câu sql vào kết nối
    $stmt = $conect->prepare($sel_contact);
    // thực thi truy vấn với csdl
    $stmt->execute();
    // lấy dữ liệu từ cơ sở dữ liệu và gán cho 1 biến
    $sel_contact = $stmt->fetchAll();
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


    <div class="contact-area d-flex align-items-center">

        <div class="google-map">
            <div id="googleMap"></div>
        </div>

        <div class="contact-info">
            <?php foreach ($sel_contact as $showC): ?>
            <h2><?php echo $showC['title'] ?></h2>
            <p><?php echo $showC['content'] ?></p>

            <div class="contact-address mt-50">
                <p><span>address:</span> <?php echo $showC['address'] ?></p>
                <p><span>telephone:</span> <?php echo $showC['telephone'] ?></p>
                <p><a href="mailto:contact@essence.com"><?php echo $showC['mail'] ?></a></p>
            </div>
            <?php endforeach ?>
        </div>

    </div>

    <?php include('./abc/footer.php') ?>

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
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

</body>

</html>