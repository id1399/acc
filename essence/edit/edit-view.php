<?php
$id = $_GET['id'];
$s_select = " SELECT * FROM sanpham where san_pham_id = $id ";
$s_select_sp = mysqli_query($conn, $s_select);
$view_update = " UPDATE sanpham SET view = view + 1 where  san_pham_id = $id ";
mysqli_query($conn, $view_update);	
?>
