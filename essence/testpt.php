<?php 
        //  TÌM TỔNG SỐ PRODUCTS
        $sel = "select count(id) as total from products";
        $result = mysqli_query($conn,$sel);
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
 
        // BƯỚC 3: TÌM LIMIT VÀ GET ID TỪNG TRANG
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 3  ;
 
        // BƯỚC 4: TÍNH TOÁN SỐ LƯỢNG TRANG VÀ BẮT ĐẦU TỪ ĐÂU
        // tổng số trang
        $total_page = ceil($total_records / $limit);
 
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
 
        // Tìm Start
        $start = ($current_page - 1) * $limit;
 
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
        $sel_limit =  "SELECT * FROM products LIMIT $start, $limit";
        $result_litmit = mysqli_query($conn,$sel_limit);
           
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sel_limit = "SELECT * FROM products WHERE id_category = $id ";
        }
        $result_litmit = mysqli_query($conn,$sel_limit);
        ?>

        