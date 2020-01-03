<?php

    include "db_connect.php";
    $id = "";
    if (!empty($_GET["id"])) {
        $id = (int)($_GET["id"]);
    } else {
        header("location:404.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Made In Nigeria - Classified Ads</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/line-icons.css">

    <link rel="stylesheet" type="text/css" href="css/slicknav.css">

    <link rel="stylesheet" type="text/css" href="css/color-switcher.css">

    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" type="text/css" href="css/main.css">

    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>

    <header id="header-wrap">

        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-xs-12">

                        <ul class="list-inline">
                            <li><i class="lni-phone"></i>+2347066818156</li>
                            <li><i class="lni-envelope"></i> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c3f393c3c233e380c2b212d2520622f2321">[email&#160;protected]</a></li>
                        </ul>

                    </div>
                    <div class="col-lg-5 col-md-7 col-xs-12">
                        <div class="roof-social float-right">
                            <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                            <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                            <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                            <a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a>
                            <a class="google" href="#"><i class="lni-google-plus"></i></a>
                        </div>
                        <div class="header-top-right float-right">
                            <a href="login.html" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
                            <a href="register.html" class="header-top-button"><i class="lni-pencil"></i> Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
            <div class="container">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="lni-menu"></span>
                        <span class="lni-menu"></span>
                        <span class="lni-menu"></span>
                    </button>
                    <a href="index-2.html" class="navbar-brand"><img src="" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mr-auto w-100 justify-content-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.html">
                                Categories
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">
                                Listings
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="about.html">About Us</a>
                                <a class="dropdown-item" href="services.html">Services</a>
                                <a class="dropdown-item" href="ads-details.html">Ads Details</a>
                                <a class="dropdown-item" href="pricing.html">Packages</a>
                                <a class="dropdown-item" href="testimonial.html">Testimonial</a>
                                <a class="dropdown-item" href="faq.html">FAQ</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <div class="post-btn">
                        <a class="btn btn-common" href="post-ads.html"><i class="lni-pencil-alt"></i> Post an Ad</a>
                    </div>
                </div>
            </div>

            <ul class="mobile-menu">
                <li>
                    <a class="active" href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="category.html">Categories</a>
                </li>
                <li>
                    <a href="#">
                        Listings
                    </a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="ads-details.html">Ads Details</a></li>
                        <li><a href="pricing.html">Packages</a></li>
                        <li><a href="testimonial.html">Testimonial</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact Us</a>
                </li>
            </ul>

        </nav>

    </header>


    <div class="page-header" style="background: url(img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Blog Details</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home /</a></li>
                            <li class="current">Blog Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12">

                    <div class="blog-post single-post">

                    <?php 
                    $sql = "SELECT * FROM `blog` WHERE id = '$id'";
                    $result = $conn->query($sql);

                    while($blog = $result->fetch_assoc()):
                    $blog_id = $blog['id'];
                    $blog_image = $blog['image'];
                    $blog_cat = $blog['category'];
                    $blog_time = $blog['date'];
                    $blog_author = $blog['author'];
                    $blog_post = $blog['post'];
                    $blog_title = $blog['title'];
                    ?>

                        <div class="post-thumb">
                            <a href="#"><img class="img-fluid img-responsive" src="<?php echo $blog_image;?>" alt="<?php echo $blog_title;?>"></a>
                            <div class="hover-wrap">
                            </div>
                        </div>


                        <div class="post-content">
                            <h2 class="post-title"><a href="single-post.html"><?php echo $blog_title;?></a></h2>
                            <div class="meta">
                                <span class="meta-part"><a href="#"><i class="lni-user"></i> <?php echo $blog_author;?></a></span>
                                <span class="meta-part"><a href="#"><i class="lni-alarm-clock"></i> <?php echo $blog_time;?></a></span>
                                <span class="meta-part"><a href="#"><i class="lni-comments-alt"></i> 1 Comments</a></span>
                            </div>
                            <div class="entry-summary">
                                <p><?php echo $blog_post;?></p>
                            </div>
                        </div>
                    <?php endwhile;?>    

                    </div>


                    <div id="comments">
                        <div class="comment-box">
                            <h3>Comments</h3>
                            <ol class="comments-list">
                                <li>
                                    <div class="media">
                                        <div class="thumb-left">
                                            <a href="#">
                                                <img class="img-fluid" src="img/blog/user1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="info-body">
                                            <div class="media-heading">
                                                <h4 class="name">Larsen Mortin</h4>
                                                <span class="comment-date"><i class="lni-alarm-clock"></i> June 21, 2018</span>
                                                <a href="#" class="reply-link"><i class="lni-reply"></i> Reply</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, nemo ipsam eum illo minus voluptatibus ipsa nulla, perferendis aliquid aperiam beatae nihil sapiente eaque atque nesciunt perspiciatis ex saepe,
                                                quibusdam..
                                            </p>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="media">
                                                <div class="thumb-left">
                                                    <a href="#">
                                                        <img class="img-fluid" src="img/blog/user2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="info-body">
                                                    <div class="media-heading">
                                                        <h4 class="name">Albert Johnes</h4>
                                                        <span class="comment-date"><i class="lni-alarm-clock"></i> June 21, 2018</span>
                                                        <a href="#" class="reply-link"><i class="lni-reply"></i> Reply</a>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, nemo ipsam eum illo minus voluptatibus ipsa nulla, perferendis aliquid aperiam beatae nihil sapiente eaque atque nesciunt perspiciatis
                                                        ex saepe, quibusdam..</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="thumb-left">
                                            <a href="#">
                                                <img class="img-fluid" src="img/blog/user3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="info-body">
                                            <div class="media-heading">
                                                <h4 class="name">Steven Hawkins</h4>
                                                <span class="comment-date"><i class="lni-alarm-clock"></i> June 21, 2018</span>
                                                <a href="#" class="reply-link"><i class="lni-reply"></i> Reply</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, nemo ipsam eum illo minus voluptatibus ipsa nulla, perferendis aliquid aperiam beatae nihil sapiente eaque atque nesciunt perspiciatis ex saepe,
                                                quibusdam..
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ol>

                            <div id="respond">
                                <h2 class="respond-title">Leave A Comment</h2>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <input id="author" class="form-control" name="author" type="text" value="" size="30" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <input id="email" class="form-control" name="author" type="text" value="" size="30" placeholder="Your E-Mail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12col-xs-12">
                                            <div class="form-group">
                                                <textarea id="comment" class="form-control" name="comment" cols="45" rows="8" placeholder="Massage..."></textarea>
                                            </div>
                                            <button type="submit" id="submit" class="btn btn-common">Post Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>

                <aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar">

                    <div class="widget categories">
                        <h4 class="widget-title">All Categories</h4>
                        <ul class="categories-list">
                            <?php
                                $sql = "SELECT * FROM `category`";
                                $result = $conn->query($sql);
                                
                                while($cat = $result->fetch_assoc()):
                                $cat_name = $cat["category"];
                                $cat_id = $cat["id"];
                                $cat_icon = $cat["icon"];

                                $numsql = "SELECT * FROM `blog` where `category` = '.$cat_name.'";
                                $numresult = $conn->query($numsql);
                                $nums = $numresult->num_rows
                            ?>
                                <li>
                                    <a href="category.php?id=<?php echo $cat_id;?>">
                                        <i class="<?php echo $cat_icon;?>"></i> <?php echo $cat_name;?> <span class="category-counter"><?php echo $nums;?></span>
                                    </a>
                                </li>
                            <?php endwhile;?>
                        </ul>
                    </div>

                    <div class="widget widget-popular-posts">
                        <h4 class="widget-title">Recent Posts</h4>
                        <ul class="posts-list">
                        <?php 
                            $sql = "SELECT * FROM `blog` WHERE id != '$id' ORDER BY RAND()";
                            $result = $conn->query($sql);

                            while($blog = $result->fetch_assoc()):
                            $blog_id = $blog['id'];
                            $blog_image = $blog['image'];
                            $blog_time = $blog['date'];
                            $blog_title = $blog['title'];

                            if (strlen($blog_title) > 23) {
                                $blog_title = substr($blog_title,0,23);
                                $blog_title = substr_replace($blog_title, "...", 23);
                            }
                            ?>
                            <li>
                                <div class="widget-thumb">
                                    <a href="single-post.php?id=<?php echo $id;?>"><img src="<?php echo $blog_image;?>" alt="<?php echo $blog_title;?>" /></a>
                                </div>
                                <div class="widget-content">
                                    <a href="single-post.php?id=<?php echo $id;?>"><?php echo $blog_title;?></a>
                                    <span><i class="icon-calendar"></i><?php echo $blog_time;?></span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        <?php endwhile;?>    
                        </ul>
                    </div>
                </aside>

            </div>
        </div>
    </div>


    <footer>

        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <div class="footer-logo"><img src="img/logo.png" alt=""></div>
                            <div class="textwidget">
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt consectetur, adipisci velit.</p>
                            </div>
                            <ul class="mt-3 footer-social">
                                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Quick Link</h3>
                            <ul class="menu">
                                <li><a href="#">- About Us</a></li>
                                <li><a href="#">- Blog</a></li>
                                <li><a href="#">- Events</a></li>
                                <li><a href="#">- Shop</a></li>
                                <li><a href="#">- FAQ's</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <h3 class="block-title">Contact Info</h3>
                            <ul class="contact-footer">
                                <li>
                                    <strong><i class="lni-phone"></i></strong><span>+234 706 681 8156 <br> +234 706 681 8156</span>
                                </li>
                                <li>
                                    <strong><i class="lni-envelope"></i></strong><span><a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="21424e4f55404255614c40484d0f424e4c">[email&#160;protected]</a> <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="daa9afaaaab5a8ae9ab7bbb3b6f4b9b5b7">[email&#160;protected]</a></span>
                                </li>
                                <li>
                                    <strong><i class="lni-map-marker"></i></strong><span><a href="#">9870 St Vincent Place, Glasgow, DC 45 <br>Fr 45</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </footer>


    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/main.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.min.js"></script>
    <script src="js/summernote.js"></script>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>

</body>

</html>