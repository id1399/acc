<?php
include('./role.php');
include('./db/conect.php');
include('./edit/edit-index.php');

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

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form validations
              </header>
              <div class="panel-body">
                <div class="form">
                  <?php
                  while ($row = mysqli_fetch_row($query_selpr)) {
                    $id = $row[0];
                    echo '
                     
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="" ">

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Logo <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="file" name="logo_new" />
                        <input type="hidden" name="logo" value="'.$row[1].'" />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Banner <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="file" name="banner_new" />
                        <input type="hidden" name="banner" value="'.$row[2].'" />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Title Small <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="title_small" placeholder="'.$row[3].'" value="'.$row[3].'" />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Title <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="title" placeholder="'.$row[4].'" value="'.$row[4].'" />
                      </div>
                    </div>
              
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="submit-setting" >UPDATE</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>

                  </form>
                  ';
                  }
                  ?>
                </div>

              </div>
            </section>
          </div>
        </div>

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