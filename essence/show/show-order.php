<?php
if(!isset($_SESSION['username'])){
    $id = "";
}else{
    $id = $_SESSION['id'];
}


$showOrder ="SELECT * 
             FROM bill_order as od
             JOIN status as stt ON stt.id = od.status
             WHERE id_user = $id";

$showQr_order = mysqli_query($conn,$showOrder);

if(isset($_GET['id'])){
    $id_detail = $_GET['id'];
    $showOrder_detail = "SELECT * FROM bill_detail WHERE id_order = $id_detail ";
    $showQr_detail = mysqli_query($conn,$showOrder_detail);

}
if(isset($_GET['id'])){
$id_pr = $_GET['id'];
$priceOrder = "SELECT * FROM bill_order WHERE id = $id_pr ";
$host = "127.0.0.1";
$dbname = "db2";
$dbUsername = "root";
$dbPass = "";
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
                    $dbUsername, 
                    $dbPass);
$stmt = $conn->prepare($priceOrder);
$stmt->execute();
$pri = $stmt->fetch();

}
?>