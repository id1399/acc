<?php
    $sel_account = "SELECT * 
                    FROM accounts as acc
                    JOIN role as r ON r.id = acc.id_role ";
    $queryacc = mysqli_query($conn,$sel_account);
?>