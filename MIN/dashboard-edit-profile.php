<?php 

  $Lname_err = $Fname_err = $Uname_err = $Pimage_err = $Pnumber_err = "";

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
    if (!empty($_POST['Fname'])) {
      $Fname = test_input($_POST['Fname']);
      if (!preg_match('/^[a-zA-Z]*$/', $Fname)) {
        $Fname_err = "Only alphabet and whitespaces are allowed";
      }
    }else{
       $fname_err = "Enter the name of your product";
    }

    if (!empty($_POST['Lname'])) {
      $Lname = test_input($_POST['Lname']);
      if (!preg_match('/^[a-zA-Z]*$/', $Lname)) {
        $Lname_err = "Only alphabet and whitespaces are allowed";
      }
    }else{
       $Lname_err = "Enter the name of your product";
    }

    if (!empty($_POST['Uname'])) {
      $Uname = test_input($_POST['Uname']);
      if (!preg_match('/^[a-zA-Z]*$/', $Uname)) {
        $Uname_err = "Only alphabet and whitespaces are allowed";
      }
    }else{
       $Uname_err = "Enter the name of your product";
    }

    if (!empty($_FILES["Ppicture"])) {
      $image_name = $_FILES["Ppicture"]["name"];
      $image_size = $_FILES["Ppicture"]["size"];
      $image_type = $_FILES["Ppicture"]["type"];
      $image_tmp_name = $_FILES["Ppicture"]["tmp_name"];
      $image_file_ext = strtolower(end(explode(".", $image_name)));
      $upload_path = "img/product".$image_name;
      $extension = array('jpeg','png','jpg');

      if (in_array($image_file_ext, $extension) === false) {
         $Pimage_err = "Such extension is not allowed";
      }elseif ($image_size > 2097152) {
        $Pimage_err = "Image file must not be more than 2mb";
      }else{
        move_uploaded_file($image_tmp_name, $upload_path1);
      }
    }else{
      $Pimage_err = "Select an image file";
    }

    if (!empty($_POST['Pnumber'])) {
      $Pnumber = test_input($_POST['Pnumber']);
      if (!preg_match('/^[0-9]*$/', $Pnumber)) {
        $Pnumber_err = "Only numbers are allowed";
      }
    }else{
       $Pnumber_err = "Enter your phone number";
    }

    $sql = "UPDATE `product_seller` SET `first_name`='$Fname',`last_name`='$Lname',`username`='$Uname',`phone_number`='$Pnumber',`image`='$image_name' WHERE `email` = '$email'";
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
  <meta name="author" content="Mastermind">
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
                            <?php
                              $sql = "SELECT * FROM `product_seller` WHERE email = '$email'";
                              $result = $conn->query($sql);
                              while ($product_seller = $result->fetch_assoc()) {
                                $id = $product_seller['id'];
                                $first_name = $product_seller['first_name'];
                                $last_name = $product_seller['last_name'];
                                $username = $product_seller['username'];
                                $image = $product_seller['image'];
                                $email = $product_seller['email'];
                                $phone_number = $product_seller['phone_number'];
                              }
                            ?>
                            <ul class="nav">
                              <li><h4>First Name:</h4></li>
                              <li><input type="text" name="Fname" value="<?php echo $first_name;?>" class="txtinput form-control border-bottom box-shadow-none" placeholder="First Name" required/></li>
                              <span class="Fname_err"><?php echo $Fname_err;?></span>
                            </ul>
                            <ul class="nav">
                              <li><h4>Last Name:</h4></li>
                              <li><input type="text" name="Lname" value="<?php echo $last_name;?>" class="txtinput form-control border-bottom box-shadow-none" placeholder="Last Name" required/></li>
                              <span class="Lname_err"><?php echo $Lname_err;?></span>
                            </ul>
                            <ul class="nav">
                              <li><h4>Username:</h4></li>
                              <li><input type="text" name="Uname" value="<?php echo $username;?>" class="txtinput form-control border-bottom box-shadow-none" placeholder="Username" required/></li>
                              <span class="Uname_err"><?php echo $Uname_err;?></span>
                            </ul>
                            <ul class="nav">
                              <li><h4>Profile Picture:</h4></li>
                              <li> 
                                <div class="input-group fileupload-v1">
                                  <input type="file" name="Ppicture" class="fileupload-v1-file hidden"/>
                                  <input type="text" value="<?php echo $image;?>" class="form-control fileupload-v1-path" placeholder="1." disabled>
                                  <span class="input-group-btn">
                                    <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Choose Image</button>
                                  </span>
                                </div>
                                <span class="Pimage"><?php echo $Pimage_err;?></span>
                              </li><br>
                            </ul><br>
                            <ul class="nav">
                              <li><h4>Phone Number:</h4></li>
                              <li><input type="number" name="Pnumber" value="<?php echo $phone_number;?>" class="txtinput form-control border-bottom box-shadow-none" placeholder="Phone number" required/></li>
                              <span class="Pbrand_err"><?php echo $Pnumber_err;?></span>
                            </ul>
                            <div class="col-md-12">
                              <div class="pull-right">
                                <input type="submit" class="btn btn-info" value="Update profile"/>
                              </div>
                            </div>
                        <?php endwhile?>    
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