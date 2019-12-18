<?php
      session_start();
      if(!isset($_SESSION['username'])){
        header('location: ../formlogin.php');
      }
      else if($_SESSION['id_role'] != 1 && $_SESSION['id_role'] != 3){
        header('location: ../index.php ');
      }
?>