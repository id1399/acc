<?php
    $role = $_POST['role'];
    $id = $_GET['id'];
    $upRole = "UPDATE accounts SET id_role = '$role' WHERE id = $id ";

    $host = "127.0.0.1";
    $dbname = "db2";
    $dbUsername = "root";
    $dbPass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
    $dbUsername, 
    $dbPass);

    $stmt = $conn->prepare($upRole);
    $stmt->execute();
    echo "Cập nhật thành công";
    header('location: ../accounts.php');
?>