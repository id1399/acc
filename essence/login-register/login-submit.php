<?php

    $messager = "" ;
    if(isset($_GET['message'])){
        $messager = $_GET['message'];
    }

    if(isset($_POST['login-submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = null;

        $select = "SELECT * FROM accounts WHERE username = '$username' && `password`='$password' ";
        $resul = mysqli_query($conn, $select);
        $num = mysqli_num_rows($resul);

        if($num == 1){
            $role = null;
            while($row = mysqli_fetch_row($resul)){
                $id = $row[0];
                $role = $row[5];
                $name = $row[4];
            }

            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            $_SESSION['id_role'] = $role;
            header('location: ./index.php');
        }else{
            $messager = "Sai tài khoản mật khẩu";
        }
    }
    // password_verify()
?>