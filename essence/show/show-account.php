<?php
    $id = $_SESSION['id'] ;
    $sel_accnt = "select * 
                  from accounts as acc
                  join role as r on r.id = acc.id_role
                  where acc.id = $id ";
    $host = "127.0.0.1";
    $dbname = "db2";
    $dbUsername = "root";
    $dbPass = "";
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
                        $dbUsername, 
                        $dbPass);
    $stmt = $conn->prepare($sel_accnt);
    $stmt->execute();
    $acc = $stmt->fetch();
?>