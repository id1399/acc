<?php
include('./role.php');
include('./db/conect.php');

$showPr_index = "SELECT * FROM setting_index";
$queryS_index = mysqli_query($conn, $showPr_index);
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

  <title>Grids | Creative - Bootstrap 3 Responsive Admin Template</title>

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
      <section class=" wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-tasks"></i> Grids</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-desktop"></i>UI Fitures</li>
              <li><i class="fa fa-tasks"></i>Grids</li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6" style="width: 100%;">
            <section class="panel">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Logo</th>
                    <th style="width: 20%">Banner</th>
                    <th>Title Small</th>
                    <th>Title</th>
                    <th>..........</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    while ($row = mysqli_fetch_row($queryS_index)) {
                      $id = $row[0];
                      echo '
                      <tr>
                        <td>#</td>
                        <td><img src="../img/core-img/' . $row[1] . '" alt=""></td>
                        <td><img style="width: 40%" src="../img/bg-img/' . $row[2] . '" alt=""></td>
                        <td>'.$row[3].'</td>
                        <td>'.$row[4].'</td>
                        <td><button onclick="clickEdit(' . $id . ')">Sửa</button></td>
                      </tr>
                        ';
                    }
                  ?>

                </tbody>
              </table>
            </section>
          </div>

        </div>

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

  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
<script>
  function clickEdit(id) {
    var submit
    if (submit = true) {
      window.location.href = './edit_index.php?id=' + id;
    }
  }
</script>
