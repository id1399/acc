<?php
    $cart = array();// Khởi tạo giỏ hàng mặc định
    if(isset($_SESSION['cart'])){// Lấy dữ liệu giỏ hàng đang có
        $cart = $_SESSION['cart'];

    }
    if(isset($_POST['addToCart'])){
        $CheckExist = findArrayByID($_POST['product_id'],$cart); // kiểm tra sự tồn tại của sp
        
        if($CheckExist == -1){ // Nếu chưa có gì sẽ thêm
            $product = new stdClass(); // Cho tất cả vào 1 cái object

            $product->id =  $_POST['product_id']; // id product đc thêm
            $product->name = $_POST['name'];
            $product->soce = $_POST['source'];
            $product->sale = $_POST['sale_price'];
            $product->img = $_POST['image'];

            $product->soluong = 1; // chỉ ra số lượng sp thêm đc
    
            array_push($cart,$product);// Đẩy sp vào giỏ
            $_SESSION['cart'] = $cart;
            echo '<script type="text/javascript">alert("Bạn đã thêm sản phẩm mã'.$product->id.' thành công vào giỏ hàng"); </script>';
        }else{
            //tồn tại thì tăng số lượng
            $cart[$CheckExist]->soluong = $cart[$CheckExist]->soluong + 1;
            $_SESSION['cart'] = $cart;
            echo '<script type="text/javascript">alert("Bạn đã mua thêm sản phẩm mã'.$product->id.' thành công vào giỏ hàng"); </script>';
        }
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