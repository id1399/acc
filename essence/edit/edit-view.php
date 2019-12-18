<?php
$id = $_GET['id'];
$s_select = " SELECT * FROM products where id = $id ";
$s_select_sp = mysqli_query($conn, $s_select);
$view_update = " UPDATE products SET view = view + 1 WHERE  id = $id ";
mysqli_query($conn, $view_update);	
?>
