<?php
      session_start();
      if(!isset($_SESSION['username'])){
        header('location: ../formlogin.php');
      }
      else if($_SESSION['id_role'] != 1){
        header('location: ../index.php ');
      }
?>