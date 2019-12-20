<?php
        session_start();
        $errName = "";
        $errEmail = "";
        $errPhone = "";
        $errNote = "";
        $id_user = $_POST['user_id'];
        $name_order  = $_POST['name_order'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $note = $_POST['note'];

        $host = "127.0.0.1";
        $dbname = "db2";
        $dbUsername = "root";
        $dbPass = "";
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
                            $dbUsername, 
                            $dbPass);
        
        $selOrder ="SELECT * FROM bill_order ORDER BY id DESC LIMIT 1";
        $stmttt = $conn->prepare($selOrder);
        $stmttt->execute();
        $listId = $stmttt->fetchAll();

        foreach ($listId as $key => $idList) {
                 $id = $idList['id'];

        $upOrder = "UPDATE bill_order SET id_user = $id_user,
                                        name = '$name_order',
                                        email = '$email',

                                        phone = '$phone',
                                        note = '$note',
                                        status = 2 WHERE id = $id";
        $stmt = $conn->prepare($upOrder);
        $stmt->execute();

        }
        
        echo '<script type="text/javascript">alert("Thanh toán thành công"); </script>';
        // header('location: ../index.php');
?>
<a href="../index.php">Back To Index</a>