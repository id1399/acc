<?php
$id = $_GET['id'];
$selQueryAcc = "SELECT * FROM accounts as acc WHERE acc.id = $id ";

$host = "127.0.0.1";
$dbname = "db2";
$dbUsername = "root";
$dbPass = "";
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
					$dbUsername, 
					$dbPass);
$stmt = $conn->prepare($selQueryAcc);
$stmt->execute();
$acc = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Elements | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

  <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>

  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php
    include('./abc/header.php');
    ?>
    <!--header end-->

    <!--sidebar start-->
    <?php
    include('body.php')
    ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-list-alt"></i> Setting</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-desktop"></i>Setting</li>
              <li><i class="fa fa-list-alt"></i>Index</li>
            </ol>
          </div>
        </div>
        <!-- -------------------- -->
        <form action="./edit/edit-accounts.php?id=<?php echo $acc['id']?>" method="post">
          <div class="row">
            <div class="col-sm-6" style="width: 100%;">
              <section class="panel">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Tài khoản</th>
                      <th>Tên</th>
                      <th>Ảnh</th>
                      <th>Email</th>
                      <th>Quyền</th>
                    </tr>
                  </thead>
                  <tbody>
                        <tr>
                          <td>#</td>
                          <td><?php echo $acc['username'] ?></td>
                          <td><?php echo $acc['name'] ?></td>
                          <td><?php echo $acc['avatar'] ?></td>
                          <td><?php echo $acc['email'] ?></td>
                          <td>
                            <select name="role" id="">
                              <option <?php if($acc['id_role']== 1) echo "selected" ?> value="1" >Boss</option>
                              <option <?php if($acc['id_role']== 2) echo "selected" ?> value="2" >Thành viên</option>
                              <option <?php if($acc['id_role']== 3) echo "selected" ?> value="3" >Quản trị</option>
                            </select>
                          </td>
                        </tr>
                  </tbody>
                </table>
              </section>
            </div>
          </div>
          <button type="submit">Cập nhật</button>
        </form>

        <!-- --------------- -->

      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- gritter -->

  <!-- custom gritter script for this page only-->
  <script src="js/gritter.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>




</body>

</html>