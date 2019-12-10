<?php
include('./role.php');
include('./db/conect.php');
include('./edit/edit-product.php');
include('./quanlyhethong/danhmuc.php');

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

  <title>Blank | Creative - Bootstrap 3 Responsive Admin Template</title>

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
    include('body.php');
    ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> Product</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-bars"></i>Product</li>
              <li><i class="fa fa-square-o"></i>Edit</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form validations
              </header>
              <div class="panel-body">
                <div class="form">
                  <?php
                  if($queryPr != null){
                  while ($row = mysqli_fetch_row($queryPr)) {
                      $cate = "" ;
                      while($category = mysqli_fetch_row($queryCategory)){
                        if($category[0] == $row[8]){
                          $cate = $cate.'<option value="'.$category[0].'" selected>'.$category[1].'</option>';
                        }else{
                          $cate = $cate.'<option value="'.$category[0].'" >'.$category[1].'</option>';
                        }
                      }

                    echo '
                      <form class="form-validate form-horizontal" id="feedback_form" method="post" action="">

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Loai <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select style="width : 100%;
                                      padding: 6px 0px;
                                      border-radius: 4px;
                                      border: 1px solid #9999;" class="fff" name="idcategory" >

                                      
                                      '.$cate.'
                        </select>
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Tên sản phẩm <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="name" value="' . $row[1] . '" placeholder="' . $row[1] . '" />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Giá cũ <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="price" value="' . $row[2] . '" placeholder="' . $row[2] . '" />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Giá mới <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="price_sale" value="' . $row[3] . '" placeholder="' . $row[3] . '" />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Ảnh <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="file" name="img_new" required />
                        <input class="form-control " id="cemail" type="hidden" name="img" value="'.$row[3].'">
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Mô tả <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="description" value="' . $row[5] . '" placeholder="' . $row[5] . '" />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Nguồn gốc <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="source" value="' . $row[6] . '" placeholder="' . $row[6] . '" />
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="submit-products">ADD</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                  </form>
                      ';
                  }
                }
                  ?>

                </div>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
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
  <script src="contactform/contactform.js"></script>


</body>

</html>
<?php
mysqli_close($conn);
?>