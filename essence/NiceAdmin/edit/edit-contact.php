<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // Laays duwx lieeuj cux deer thay ddooir
        $sContact = "SELECT * FROM setting_contact WHERE id = $id ";
        $queryCt = mysqli_query($conn, $sContact);
      }
      
      if (isset($_POST['submit-contact'])) {
        $id = $_GET['id'];
      
        $title = $_POST['title'];
        $content = $_POST['content'];
        $address = $_POST['address'];
        $telephone = $_POST['telephone'];
        $mail = $_POST['mail'];
      
        $upCt = "UPDATE setting_contact 
                        SET title = '$title',content = '$content',address = '$address',telephone = '$telephone',
                        mail = '$mail' WHERE id = $id  ";
        mysqli_query($conn, $upCt);
        mysqli_close($conn);
        header('location: ./form_contact.php');
      }
?>