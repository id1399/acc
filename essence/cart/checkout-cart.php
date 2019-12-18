<?php

        $id_user = $_POST['user_id'];
        $name_order  = $_POST['name_order'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $note = $_POST['note'];

        $id_product = $_POST['product_id'];
        $name_detail = $_POST['name'];
        $cost = $_POST['cost'];
        $qty = $_POST['qty'];
        $total = $_POST['total'];

        $host = "127.0.0.1";
        $dbname = "db2";
        $dbUsername = "root";
        $dbPass = "";
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
                            $dbUsername, 
                            $dbPass);

        $addOrder = "INSERT INTO bill_order(id_user,name,email,phone,note,status)
                        VALUES($id_user,'$name_order','$email','$phone','$note',2)";
        $stmt = $conn->prepare($addOrder);
        $stmt->execute();

        $insQrPrCart = "INSERT INTO bill_detail(id_user,id_product,name,cost,quantity,total)
                        VALUES($id_user,$id_product,'$name_detail',$cost,$qty,$total)";
        $stmtt = $conn->prepare($insQrPrCart);
        $stmtt->execute();
        echo '<script type="text/javascript">alert("Thanh toán thành công"); </script>';
        // header('location: ../index.php');
?>