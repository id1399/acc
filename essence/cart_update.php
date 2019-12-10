<?php
session_start();
include 'db.php';

$pro_id 			= isset($_POST["pro_id"]) ? intval($_POST["pro_id"]) : 0;
$pro_qty 			= isset($_POST["product_qty"]) ? $_POST["product_qty"] : array();
$action 			= isset($_POST["action"]) ? $_POST["action"] : "";
$remove_code 		= isset($_POST["remove_code"]) ? $_POST["remove_code"] : array();
$arrShoppingCart 	= array();

if($action == 'add' && $pro_qty > 0 && $pro_id > 0){

 	$sql	= "SELECT * FROM product WHERE product_id = " . $pro_id . " LIMIT 1";
    $result	= $conn->query($sql);

	foreach ($result as $key => $value){

		$value["pro_qty"] = $pro_qty;


		if(isset($_SESSION["cart_products"])){  //if session var already exist
            if(isset($_SESSION["cart_products"][$value['product_id']])) //check item exist in products array
            {
                unset($_SESSION["cart_products"][$value['product_id']]); //unset old array item
            }           
        }

        $_SESSION["cart_products"][$value['product_id']] = $value; //update or create product session
	}
	
}


//update or remove items 
if($action == "update")
{
	//update item quantity in product session
	if(is_array($pro_qty)){
		foreach($pro_qty as $key => $value){

			$value = intval($value);
			// var_dump($_SESSION["cart_products"][$key]);

			
			$_SESSION["cart_products"][$key]["pro_qty"] = $value;
		}
	}
	//remove an item from product session
	if(is_array($remove_code)){
		foreach($remove_code as $key){
			unset($_SESSION["cart_products"][$key]);
		}	
	}
}
header('Location: view_cart.php');

// echo '<pre>';
// print_r($_SESSION["cart_products"]);
// echo '</pre>';

?>