<?php
    $host = "127.0.0.1";
    $dbname = "db2";
    $dbUsername = "root";
    $dbPass = "";
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
                        $dbUsername, 
                        $dbPass);

    // $id_product = $_POST['product_id'];
    // $name_detail = $_POST['name'];
    // $cost = $_POST['cost'];
    // $qty = $_POST['qty'];
    // $total = $_POST['total'];

    
    $insQrPrCart = "INSERT INTO `bill_detail`(`id`, `id_user`, `id_product`, `name`, `datetime`, `cost`, `quantity`, `total`) 
    VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])";
    $stmtt = $conn->prepare($insQrPrCart);
    $stmtt->execute();
    

?>