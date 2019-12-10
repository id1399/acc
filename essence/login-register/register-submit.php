<?php


if (isset($_POST['registerSubmit'])) {
    $names = $_POST['names'];
    $usernames = $_POST['usernames'];
    $passwords = $_POST['passs'];
    $confirmPass = $_POST['confirmPass'];

    $s_name = "SELECT * FROM accounts WHERE username = '$usernames' ";
    $rel = mysqli_query($conn, $s_name);
    $rel_name = mysqli_num_rows($rel);

    if ($rel_name == 1) {
        echo "tai khoan da ton tai";
    } else if ($confirmPass != $passwords) {
        echo "k dung pas ";
    } else if ($names == "") {
        echo "Khong de trong name";
    } else if ($usernames == "") {
        echo "Khong de trong username";
    } else if ($passwords == "") {
        echo "Khong de trong pass";
    } else if ($confirmPass == "") {
        echo "k de trong passconfirm";
    } else {
        $add_regis = "INSERT INTO accounts (username,password,name,id_role)
        VALUE('$usernames','$passwords','$names',2)";
        mysqli_query($conn, $add_regis);
        echo " dang ky thanh cong";
        $_POST['usernames'] = "";
        $_POST['passs'] = "";
        $_POST['names'] = "";
    }
}
