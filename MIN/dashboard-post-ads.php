<?php 

  $Pname_err = $Pimage1_err = $Pimage2_err = $Pimage3_err =  $Pdesc_err = $Ptag_err = $Pbrand_err = $Ptag_err = $Pprice_err = $Pspec1_err = $Pspec2_err = $Pspec3_err = $Pspec4_err = $Pspec5_err = $Pname = $Pdesc = $Ptag = $Pbrand = $Pprice = $Pspec1 = $Pspec2 = $Pspec3 = $Pspec4 = $Pspec5 = "";

  require 'db_connect.php';
  
  session_start();
  
  if (!isset($_SESSION['username']) ||  !isset($_SESSION['email']) || !isset($_SESSION['id'])) {
    header('location:login.php');
  } else{
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
  }

  if ($_SERVER["REQUEST_METHOD"] == "post") {
    if (!empty($_POST['Pname'])) {
      $Pname = test_input($_POST);
      if (!preg_match('/^[a-zA-Z]*$/', $Pname)) {
        $Pname_err = "Only alphabet and whitespaces are allowed";
      }
    }else{
       $Pname_err = "Enter the name of your product";
    }

    if (!empty($_POST['Pcat'])) {
      $Pcat = test_input($_POST['Pcat']); 
    }

    if (!empty($_FILES["image1"])) {
      $image1_name = $_FILES["image1"]["name"];
      $image1_size = $_FILES["image1"]["size"];
      $image1_type = $_FILES["image1"]["type"];
      $image1_tmp_name = $_FILES["image1"]["tmp_name"];
      $image1_file_ext = strtolower(end(explode(".", $image1_name)));
      $upload_path1 = "img/product".$image1_name;
      $extension = array('jpeg','png','jpg');

      if (in_array($image1_file_ext, $extension) === false) {
         $Pimage1_err = "Such extension is not allowed";
      }elseif ($image1_size > 2097152) {
        $Pimage1_err = "Image file must not be more than 2mb";
      }else{
        move_uploaded_file($image1_tmp_name, $upload_path1);
      }
    }else{
      $Pimage1_err = "Select an image file";
    }

    if (!empty($_FILES["image2"])) {
      $image2_name = $_FILES["image2"]["name"];
      $image2_type = $_FILES["image2"]["type"];
      $image2_size = $_FILES["image2"]["size"];
      $image2_tmp_name = $_FILES["image2"]["tmp_name"];
      $image2_file_ext = strtolower(end(explode(".", $image2_name)));
      $upload_path2 = "img/product".$image2_name;
      $extension = array("jpeg","jpg","png");

      if (in_array($image2_file_ext, $extension)) {
        $Pimage2_err = "Such extension is not allowed";
      } elseif ($image2_size > 2097152) {
        $Pimage2_err = "Image file must not be more than 2mb";
      } else{
        move_uploaded_file($image2_tmp_name, $upload_path2);
      }
    }else{
      $Pimage2_err = "Select an image file";
    }

    if (!empty($_FILES["image3"])) {
      $image3_name = $_FILES["image3"]["name"];
      $image3_type = $_FILES["image3"]["type"];
      $image3_size = $_FILES["image3"]["size"];
      $image3_tmp_name = $_FILES["image3"]["tmp_name"];
      $image3_ext_name = strtolower(end(explode(".", $image3_name)));
      $upload_path3 = "img/product".$image3_name;
      $extension = array("jpeg", "jpg", "png");

      if (in_array($image3_ext_name, $extension)) {
        $Pimage3_err = "Such extension is not allowed";
      }elseif ($image3_size > 2097152) {
        $Pimage3_err = "Image file must not be more than 2mb";
      } else{
        move_uploaded_file($image3_tmp_name, $upload_path3);
      }
    }else{
      $Pimage3_err = "Select an image file";
    }

    if (!empty($_POST['Pdesc'])) {
      $Pdesc = test_input($_POST);
    }else{
       $Pdesc_err = "Enter the description of your product";
    }

    if (!empty($_POST['Ptag'])) {
      $Ptag = test_input($_POST);
      if (!preg_match('/^[a-zA-Z]*$/', $Ptag)) {
        $Ptag_err = "Only alphabet and whitespaces are allowed";
      }
    }else{
       $Ptag_err = "Enter the tag of your product";
    }

    if (!empty($_POST['Pbrand'])) {
      $Pbrand = test_input($_POST);
      if (!preg_match('/^[a-zA-Z]*$/', $Pbrand)) {
        $Pbrand_err = "Only alphabet and whitespaces are allowed";
      }
    }else{
       $Pbrand_err = "Enter the brand of your product";
    }

    if (!empty($_POST['Pprice'])) {
      $Pprice = test_input($_POST);
      if (!preg_match('/^[0-9]*$/', $Pprice)) {
        $Pprice_err = "Only numbers are allowed";
      }
    }else{
       $Pprice_err = "Enter the price of your product";
    }

    if (!empty($_POST['Pspec1'])) {
      $Pspec1 = test_input($_POST);
      if (!preg_match('/^[a-zA-Z]*$/', $Pspec1)) {
        $Pspec1_err = "Only alphabet and whitespaces are allowed";
      }
    }else{
       $Pspec1_err = "Enter a specification of your product";
    }

    if (!empty($_POST['Pspec2'])) {
      $Pspec2 = test_input($_POST);
      if (!preg_match('/^[a-zA-Z]*$/', $Pspec2)) {
        $Pspec2_err = "Only alphabet and whitespaces are allowed";
      }
    }else{
       $Pspec2_err = "Enter a specification of your product";
    }

    if (!empty($_POST['Pspec3'])) {
      $Pspec3 = test_input($_POST);
      if (!preg_match('/^[a-zA-Z]*$/', $Pspec3)) {
        $Pspec3_err = "Only alphabet and whitespaces are allowed";
      }
    }else{
       $Pspec3_err = "Enter a specification of your product";
    }

    if (!empty($_POST['Pspec4'])) {
      $Pspec4 = test_input($_POST);
      if (!preg_match('/^[a-zA-Z]*$/', $Pspec4)) {
        $Pspec4_err = "Only alphabet and whitespaces are allowed";
      }
    }else{
       $Pspec4_err = "Enter a specification of your product";
    }

    if (!empty($_POST['Pspec5'])) {
      $Pspec5 = test_input($_POST);
      if (!preg_match('/^[a-zA-Z]*$/', $Pspec5)) {
        $Pspec5_err = "Only alphabet and whitespaces are allowed";
      }
    }else{
       $Pspec5_err = "Enter a specification of your product";
    }

    $sql = "INSERT INTO `product`(`id`, `product_image`, `product_image2`, `product_image3`, `product_category`, `product_time`, `product_name`, `product_seller`, `product_location`, `product_tag`, `product_description`, `product_brand`, `product_price`, `product_spec1`, `product_spec2`, `product_spec3`, `product_spec4`, `product_spec5`) VALUES ('','$upload_path1','$upload_path2','upload_path3','$Pcat',NOW(),'$Pname','$username','','$Ptag','$Pdesc','$Pbrand','$Pprice','$Pspec1','$Pspec2','$Pspec3','$Pspec4','$Pspec5')";
    $result = $conn->query($sql);
    if ($result) {
      header('location:dashboard.php');
    } else{
      header('location:503.php');
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard - blog</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/red.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/summernote.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">

</head>

<body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>MIMIN</b>
                </a>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Akihiko Avaron</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href=""><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Subcription
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span> Post ads
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span>Ads  
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-pencil-square"></span> Messages   
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-check-square-o"></span> Blog 
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-table"></span> Logout  
                      </a>
                    </li>
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->


          <!-- start: Content -->
          <div id="content">

            <div class="col-md-12" style="padding:20px;">
              <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Post an ad</h3>
                    </div>
                </div>
              </div>

              <div class="panel mail-wrapper">

                <form method="post" action="">
                    
                  <div class="panel-body">
                      <div class="col-md-12">
                        
                        <div class="col-md-12 col-sm-12">
                            <ul class="nav">
                              <li><h4>Product Name:</h4></li>
                              <li><input type="text" name="Pname" value="<?php echo $Pname;?>" class="txtinput form-control border-bottom box-shadow-none" placeholder="Item Name"/></li>
                              <span class="Pname_err"><?php echo $Pname_err;?></span>
                            </ul>
                            <ul class="nav">
                              <li><h4>Category:</h4></li>
                              <li>
                                <select name="Pcat" id="cat" class="form-control border-bottom box-shadow-none">
                                  <?php
                                    $sql = "SELECT * FROM `category`";
                                    $result = $conn->query($sql);
                                    
                                    while($cat = $result->fetch_assoc()):
                                    $cat_name = $cat["category"];
                                    $cat_id = $cat["id"];
                                    ?>
                                    <option value="<?php echo $cat_name;?>"><?php echo $cat_name;?></option>
                                  <?php endwhile;?>
                                </select>
                              </li>
                            </ul>
                            <ul class="nav">
                              <li><h4>Images:</h4></li>
                              <li> 
                                <div class="input-group fileupload-v1">
                                  <input type="file" name="image1" class="fileupload-v1-file hidden"/>
                                  <input type="text" class="form-control fileupload-v1-path" placeholder="1." disabled>
                                  <span class="input-group-btn">
                                    <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Choose File</button>
                                  </span>
                                </div>
                                <span class="Pimage1"><?php echo $Pimage1_err;?></span>
                              </li><br>
                              <li> 
                                <div class="input-group fileupload-v1">
                                  <input type="file" name="image2" class="fileupload-v1-file hidden"/>
                                  <input type="text" class="form-control fileupload-v1-path" placeholder="2." disabled>
                                  <span class="input-group-btn">
                                    <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Choose File</button>
                                  </span>
                                </div>
                                <span class="Pimage2"><?php echo $Pimage2_err;?></span>
                              </li><br>
                              <li> 
                                <div class="input-group fileupload-v1">
                                  <input type="file" name="image3" class="fileupload-v1-file hidden"/>
                                  <input type="text" class="form-control fileupload-v1-path" placeholder="3." disabled>
                                  <span class="input-group-btn">
                                    <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Choose File</button>
                                  </span>
                                </div>
                                <span class="Pimage3"><?php echo $Pimage3_err;?></span>
                              </li>
                            </ul><br>
                            <h4>Product Description:</h4>
                              <div class="col-md-12 padding-0">
                                <textarea class="summernote" value="<?php echo $Pdesc;?>" name="Pdesc" placeholder="Description.."></textarea>
                                <span class="Pdesc_err"><?php echo $Pdesc_err;?></span>
                              </div>
                            <ul class="nav">
                              <li><h4>Product Tag:</h4></li>
                              <li><input type="text" name="Ptag" value="<?php echo $Ptag;?>" class="txtinput form-control border-bottom box-shadow-none" placeholder="eg camera, bag, shoe"/></li>
                              <span class="Pbrand_err"><?php echo $Ptag_err;?></span>
                            </ul>
                            <ul class="nav">
                              <li><h4>Product Brand:</h4></li>
                              <li><input type="text" name="Pbrand" value="<?php echo $Pbrand;?>" class="txtinput form-control border-bottom box-shadow-none" placeholder="Brand"/></li>
                              <span class="Pbrand_err"><?php echo $Pbrand_err;?></span>
                            </ul>
                            <ul class="nav">
                              <li><h4>Product Price:</h4></li>
                              <li><input type="number" value="<?php echo $Pprice;?>" name="Pprice" class="txtinput form-control border-bottom box-shadow-none" placeholder="Price"/></li>
                              <span class="Pprice_err"><?php echo $Pprice_err;?></span>
                            </ul>
                            <ul class="nav">
                              <li><h4>Product Specifications:</h4></li>
                              <li><input type="text" name="Pspec1" value="<?php echo $Pspec1;?>" class="txtinput form-control border-bottom box-shadow-none" placeholder="1."/></li>
                              <span class="Pspec1_err"><?php echo $Pspec1_err;?></span>
                              <li><input type="text" name="Pspec2" value="<?php echo $Pspec2;?>" class="txtinput form-control border-bottom box-shadow-none" placeholder="2."/></li>
                              <span class="Pspec2_err"><?php echo $Pspec2_err;?></span>
                              <li><input type="text" name="Pspec3" value="<?php echo $Pspec3;?>" class="txtinput form-control border-bottom box-shadow-none" placeholder="3."/></li>
                              <span class="Pspec3_err"><?php echo $Pspec3_err;?></span>
                              <li><input type="text" name="Pspec4" value="<?php echo $Pspec4;?>" class="txtinput form-control border-bottom box-shadow-none" placeholder="4."/></li>
                              <span class="Pspec4_err"><?php echo $Pspec4_err;?></span>
                              <li><input type="text" name="Pspec5" value="<?php echo $Pspec5;?>" class="txtinput form-control border-bottom box-shadow-none" placeholder="5."/></li>
                              <span class="Pspec5_err"><?php echo $Pspec5_err;?></span>
                            </ul><br>
                            <div class="col-md-12">
                              <div class="pull-right">
                                <input type="submit" class="btn btn-info" value="Post"/>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
          <!-- end: Content -->
      </div>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                    <li class="active ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-home fa"></span>Subcription 
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span>Post ads
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span>Ads
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-pencil-square"></span>Messages
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-check-square-o"></span> Blog 
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-table"></span>Logout
                      </a>
                    </li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->


<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


    <!-- plugins -->
    <script src="asset/js/plugins/moment.min.js"></script>
    <script src="asset/js/plugins/icheck.min.js"></script>
    <script src="asset/js/plugins/summernote.min.js"></script>
    <script src="asset/js/plugins/jquery.nicescroll.js"></script>


    <!-- custom -->
     <script src="asset/js/main.js"></script>
     <script type="text/javascript">
      (function(jQuery){
           $('input').iCheck({
              checkboxClass: 'icheckbox_flat-red',
              radioClass: 'iradio_flat-red'
            });

              $('.summernote').summernote({
                height: 750
              });
        })(jQuery);
     </script>
  <!-- end: Javascript -->
  </body>
</html>