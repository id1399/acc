<?php
    session_start();
    include('../db/conn.php');
    include('../cart/add-cart.php');

    if(isset($_POST['ins_order'])){
        $user_id = $_POST['id_user'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $total = 0;
        foreach ($cart as $key => $item) {
            $totalQty = ($item->sale)*($item->qty);
            $total = $total + $totalQty;
        }

        $insOrder = " INSERT INTO bill_order(id_user,name,email,total,status)
        VALUES($user_id,'$name','$email',$total,1)";
        mysqli_query($conn, $insOrder);

        $selOrder ="SELECT * FROM bill_order ORDER BY id DESC LIMIT 1";
        $showId = mysqli_query($conn,$selOrder);

        
        while($row = mysqli_fetch_row($showId)){
            $id = $row[0];
            $time = date(DateTime::ISO8601 );

            foreach ($cart as $key => $item) {
                $totalQty = ($item->sale)*($item->qty);
                $total = $total + $totalQty;
    
            $insQrPrCart = "INSERT INTO bill_detail(id_order,id_product,name,datetime,cost,quantity,total)
            VALUES($id,$item->id,'$item->name','$time',$item->sale,$item->qty,$totalQty)";
    
            mysqli_query($conn,$insQrPrCart);

            
        }
        }
        
        header('location:../checkout.php?id='.$id.'');
    }
?>