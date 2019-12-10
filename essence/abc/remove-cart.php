<?php
    session_start();
    $cart = array();// Khởi tạo giỏ hàng mặc định
    if(isset($_SESSION['cart'])){// Lấy dữ liệu giỏ hàng đang có
        $cart = $_SESSION['cart'];
    }

    $id = $_GET['id'];
    $vitri = findArrayByID($id,$cart);
    if ($vitri != -1) {
        unset($cart[$vitri]);

        $_SESSION['cart'] = $cart;
        header('location: ../shop.php');
    }
   
    function findArrayByID($id, $array) // Tìm vị trí trong mảng theo id
    { 
        $result = -1; // chưa có gì
        $index = 0; // mặc định 0
        foreach ($array as $key => $item) {
            if($id == $item->id ){ // nếu id bằng nhau
                return $index; // trả về bắt đầu từ 0
            }
            $index = $index + 1; // tăng thêm khi add
        }
        return $result; // Quay lại từ chưa có gì khi reset lại trang
    } 
?>
