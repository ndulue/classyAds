<?php

  require 'db_connect.php';
    session_start();
    if (!isset($_SESSION['username']) || !isset($_SESSION['id']) || !isset($_SESSION['email'])) {
      header('location:login.php');
    } else{
      $username = $_SESSION['username'];
      $email = $_SESSION['email'];
      $id = $_SESSION['id'];
    }

    if (!empty($_GET["delete"])) {
      $delete = (int)($_GET["delete"]);
      $sql = "DELETE * FROM `product` WHERE id = '$delete'";
      $result = $conn->query($sql);

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="author" content="Mastermind">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard :: ads</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
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
                <a href="index.php" class="navbar-brand"> 
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
                    <a  class="tree-toggle nav-header"><span class="fa-home fa"></span> Subcription
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
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Ads</h3>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Tables</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0">
                        <tbody>
                          <?php 
                            $num = 0;
                            $sql = "SELECT * FROM `product` WHERE product_seller = '$username'";
                            $result = $conn->query($sql);
                            $row = $result->num_rows;
                            if ($row == 0) {
                              echo "<H4 class='text-center'>You dont have any ad(s)</H4>";
                            }
                            while ($ads = $result->fetch_assoc()):
                              $id = $ads['id'];
                              $name = $ads['product_name'];
                              $cat = $ads['product_category'];
                              $brand = $ads['product_brand'];
                              $num++;

                              if (strlen($name) > 25) {
                                $name = substr($name,0,25);
                                $name = substr_replace($name, "...", 25);
                              }
                          ?>
                          <tr>
                            <td><h4 class="text-center"><?php echo $num;?></h4></td>
                            <td><h4 class="text-center"><?php echo $name;?></h4></td>
                            <td><h4 class="text-center"><?php echo $cat;?></h4></td>
                            <td><h4 class="text-center"><?php echo $brand;?></h4></td>
                            <td><a href="dashboard-edit-ads.php?edit=<?php echo $id;?>" class="btn ripple btn-3d btn-primary btn-block text-center">Edit</a></td>
                            <td><a href="dashboard-ads.php?delete=<?php echo $id;?>" class="btn ripple btn-3d btn-danger btn-block text-center">Delete</a></td>
                          <?php endwhile;?>  
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->
          
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
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<!-- end: Javascript -->
</body>
</html>