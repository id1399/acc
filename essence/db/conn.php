<?php
    $conn = mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'db2');
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>