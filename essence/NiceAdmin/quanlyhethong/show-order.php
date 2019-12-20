<?php

    $showOrder ="SELECT * 
    FROM bill_order as od
    JOIN status as stt ON stt.id = od.status";

    $host = "127.0.0.1";
    $dbname = "db2";
    $dbUsername = "root";
    $dbPass = "";
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
            $dbUsername, 
            $dbPass);
    $stmt = $conn->prepare($showOrder);
    $stmt->execute();
    $order = $stmt->fetchAll();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $showOrder_detal ="SELECT * FROM bill_detail WHERE id_order = $id ";

        $stmtt = $conn->prepare($showOrder_detal);
        $stmtt->execute();
        $detail = $stmtt->fetchAll();
    }
?>