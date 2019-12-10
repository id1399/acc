<?php
    $conn = mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'db2');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>