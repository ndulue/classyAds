<?php 

  $title_err = $bpost_err = $image_err = $bpost = $title = "";

  require 'db_connect.php';
  session_start();
  if (!isset($_SESSION['username']) ||  !isset($_SESSION['email']) || !isset($_SESSION['id'])) {
    header('location:login.php');
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['title'])) {
      $title = test_input($_POST['title']);
      if (!preg_match("/^[a-zA-Z]*$/", $title)) {
        $title_err = "Enter only alphabet and whitespaces";
      }

    } else{
      $title_err = "Enter a title for your blog post";
    }

    if (!empty($_POST['cat'])) {
      $cat = ($_POST['cat']);
    }

    if (!empty($_FILES['image'])) {
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext = strtolower(end(explode('.', $file_name)));
      $upload_path = "img/blog/".$file_name;

      $extension = array('jpeg','jpg','png');

      if (in_array($file_ext, $extension) === false) {
            $image_err = 'extension is not allowed';
      }

      if ($file_size > 2097152) {
            $image_err = 'image size must not exceed 2 mb';
      }

      if (empty($image_err) === true) {
            move_uploaded_file($file_tmp, $upload_path);
      }      

    } else{
      $title_err = "Select an image for your blog post";
    }

    if (!empty($_POST['bpost'])) {
      $bpost = test_input($_POST['bpost']);
      if (!preg_match("/^[a-zA-Z]*$/", $bpost)) {
        $bpost_err = "Enter only alphabet and whitespaces";
      }

    } else{
      $bpost_err = "Enter your blog post";
    }

    $sql = "INSERT INTO `blog` (`id`, `image`, `author`, `date`, `title`, `post`, `category`) VALUES ('','$upload_path','$user', NOW(), '$title', '$bpost', '$cat')";
    $result = $conn->query($sql);

    if ($result) {
      header('location:blog-posts.php');
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
                          
                          <div class="col-md-12 mail-right-tool">
                            <ul class="nav">
                                <li><h4>Title:</h4></li>
                                <li><input type="text" name="title" value="<?php echo $title;?>" id="title" class="txtinput border-none box-shadow-none" placeholder="Post Title"/></li>
                                <span class="title_err"><?php echo $title_err;?></span>
                            </ul>

                            <ul class="nav">
                                <li><h4>Category:</h4></li>
                                <li><select name="cat" id="cat" class="form-control border-none box-shadow-none">
                                    <?php
                                      $sql = "SELECT * FROM `category`";
                                      $result = $conn->query($sql);
                                      
                                      while($cat = $result->fetch_assoc()):
                                      $cat_name = $cat["category"];
                                      $cat_id = $cat["id"];
                                      $cat_icon = $cat["icon"];
                                      ?>

                                    <option value="<?php echo $cat_name;?>"><?php echo $cat_name;?></option>

                                    <?php endwhile;?>
                                </select>
                                </li>
                            </ul>

                            <ul class="nav">
                              <li><h4>Image:</h4></li>
                              <li> 
                                <div class="input-group fileupload-v1">
                                  <input type="file" name="image" id="image" name="image" class="fileupload-v1-file hidden"/>
                                  <input type="text" class="form-control fileupload-v1-path" placeholder="File Path..." disabled>
                                  <span class="input-group-btn">
                                    <button class="btn fileupload-v1-btn" type="button"><i class="fa fa-folder"></i> Choose File</button>
                                  </span>
                                  <span class="image_err"><?php echo $image_err;?></span>
                                </div>
                              </li>
                            </ul><br>
                          </div>
                          <div class="col-md-12 mail-right-content" style="padding=left:10px;">
                          <h4>Blog post:</h4>
                              <div class="col-md-12 padding-0">
                                <textarea class="summernote" name="bpost" id="bpost" value="<?php echo $bpost;?>" placeholder="Type Your Message.."></textarea>
                                <span class="post_err"><?php echo $bpost_err;?></span>
                              </div>
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