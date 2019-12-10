<?php 
session_start();
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header('location: index.php');
	die;
}
$id = $_SESSION['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$file = $_FILES['avatar'];
$updateAccQuery = "UPDATE accounts
					SET 
						name = '$name',
                        email = '$email'";
                        
if($file['size'] > 0){
	$filename = "uploads/". uniqid() . "-" . $file['name'];
	move_uploaded_file($file['tmp_name'], $filename);
	$updateAccQuery .= ", avatar = '$filename'";
}

$updateAccQuery .= " where id = $id";

$host = "127.0.0.1";
$dbname = "db2";
$dbUsername = "root";
$dbPass = "";
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
					$dbUsername, 
					$dbPass);
$stmt = $conn->prepare($updateAccQuery);
$stmt->execute();
header('location: ../user-detail.php');
 ?>