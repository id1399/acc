<?php
//     $errPass = "";
//     if(isset($_POST['submit-pass'])){

//     $id = $_SESSION['id'];
//     $password = $_POST['pass'];
//     $new_pass = $_POST['pass_new'];
//     $cf_pass = $_POST['cf_pass'];
    
//     $selQueryPass = "SELECT * FROM accounts WHERE id = $id ";
//     $queryPassss = mysqli_query($conn,$selQueryPass);

  

//     if ($password != $pwd) {
//         $errPass = "Mật khẩu cũ không đúng";
//     }else if($password == "" || $new_pass == "" || $cf_pass == ""){
//         $errPass = "Vui lòng nhập mật khẩu";
//     }else if($new_pass != $cf_pass){
//         $errPass = "Không trùng khớp mật khẩu";
//     }else{
//         $updateAccQuery = "UPDATE accounts SET password = '$new_pass' WHERE id = $id ";
//         mysqli_query($conn,$updateAccQuery);
//         header('location: ./user-detail.php');
//     }   
    
// }
?>