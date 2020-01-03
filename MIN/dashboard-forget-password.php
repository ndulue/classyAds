<?php
    $old_password = $new_password = $confirm_password = $confirm_password_err = $old_password_err = $new_password_err = "";

    include 'db_connect.php';
    session_start();
    if ((!isset($_SESSION['email'])) || (!isset($_SESSION['username'])) || (!isset($_SESSION['id']))) {
        header('location:login.php');
    };
    $user = $_SESSION['username'];
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];

    $sql = "SELECT * FROM `users` WHERE username = '$user'";
    $result = $conn->query($sql);
    while ($user = $result->fetch_assoc()) {
        $balance = $user['balance'];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['old_password'])) {
            $old_password = test_input($_POST['old_password']);
        } else {
            $old_password_err = "Input your old password";
        };

        if (!empty($_POST['new_password'])) {
            $new_password = test_input($_POST['new_password']);
        } else {
            $new_password_err = "Input your new password";
        };

        if (!empty($_POST['confirm_password'])) {
            $confirm_password = test_input($_POST['confirm_password']);
        } else {
            $confirm_password_err = "Confirm your password";
        };
        if (strlen($new_password) < 6) {
            $new_password_err = "Your password should not be less than 6 digit";
        }

        if ($new_password !== $confirm_password) {
            $confirm_password_err = "Your new password are not correct";
        }

        $sql = "SELECT * FROM `users` where email = '$email' AND password = '$old_password'";
        $result = $conn->query($sql);
        $num = $result->num_rows;
        if ($num > 0) {
            $Isql = "UPDATE `users` SET `password` = '$confirm_password' WHERE email = '$email'";
            $result = $conn->query($Isql);
            if ($result) {
            header('location:login.php');
            }else{
                header('Location: 503.php');
            }
        }
    }


    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
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
                 <b>MIN</b>
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
                        <h3 class="animated fadeInLeft">Make a blog post</h3>
                        <p class="animated fadeInDown">
                          Blog <span class="fa-angle-right fa"></span> post
                        </p>
                    </div>
                </div>
              </div>

              <div class="panel mail-wrapper">

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                  <div class="panel-body">
                      <div class="col-md-12 padding-0">
                        
                        <div class="col-md-12 col-sm-12 padding-0">
                            <ul class="nav">
                                <li><h4>Old password:</h4></li>
                                <li><input type="password" name="old_password" value="<?php echo $old_password;?>" id="old_password" class="txtinput border-none box-shadow-none" placeholder="Old Password"/></li>
                                <span class="title_err"><?php echo $old_password_err;?></span>
                            </ul>

                            <ul class="nav">
                                <li><h4>New password:</h4></li>
                                <li><input type="password" name="new_password" value="<?php echo $new_password;?>" id="new_password" class="txtinput border-none box-shadow-none" placeholder="Post Title"/></li>
                                <span class="new_password_err"><?php echo $new_password_err;?></span>
                            </ul>

                            <ul class="nav">
                                <li><h4>Confirm password:</h4></li>
                                <li><input type="password" name="confirm_password" value="<?php echo $confirm_password;?>" id="confirm_password" class="txtinput border-none box-shadow-none" placeholder="Post Title"/></li>
                                <span class="confirm_password_err"><?php echo $confirm_err;?></span>
                            </ul>
                          <div class="col-md-12 mail-right-content" style="padding=left:10px;">
                              <div class="col-md-12">
                                <div class="pull-right">
                                  <input type="submit" class="btn btn-primary" value="Send"/>
                                </div>
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


          <!-- start: right menu -->
             
          <!-- end: right menu -->
          
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