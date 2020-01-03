<?php                  
    include 'db_connect.php';
?>


<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Made in Nigeria - Classified Ads</title>

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
                            <li><i class="lni-phone"></i> +234 706 681 8156</li>
                            <li><i class="lni-envelope"></i> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="13606663637c616753747e727a7f3d707c7e">[email&#160;protected]</a></li>
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
                            <a href="login.php" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
                            <a href="register.php" class="header-top-button"><i class="lni-pencil"></i> Register</a>
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
                    <a href="index.php" class="navbar-brand"><img src="" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav mr-auto w-100 justify-content-center">
                        <li>
                            <a class="nav-link" href="index.php">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.php">
                                Categories
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="adlisting.php">
                                Listings
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="about.php">About Us</a>
                                <a class="dropdown-item" href="pricing.php">Packages</a>
                                <a class="dropdown-item" href="testimonial.php">Testimonial</a>
                                <a class="dropdown-item" href="faq.php">FAQ</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">
                                Blog
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <div class="post-btn">
                        <a class="btn btn-common" href="dashboard-subcription"><i class="lni-pencil-alt"></i> Post an Ad</a>
                    </div>
                </div>
            </div>

            <ul class="mobile-menu">
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                <li>
                    <a href="category.php">Categories</a>
                </li>
                <li>
                    <a href="adlisting.php">
                        Listings
                    </a>
                </li>
                <li>
                    <a class="active"  href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="ads-details.php">Ads Details</a></li>
                        <li><a href="pricing.php">Packages</a></li>
                        <li><a href="testimonial.php">Testimonial</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                </li>
                <li>
                    <ahref="contact.php">Contact Us</a>
                </li>
            </ul>

        </nav>

    </header>


    <div class="page-header" style="background: url(img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">Blog</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home /</a></li>
                            <li class="current">Blog</li>
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

                    <?php
                        $sql = "SELECT * FROM `blog` ORDER BY DATE LIMIT 3";
                        $result = $conn->query($sql);
                        
                        while ($blog = $result->fetch_assoc()):
                            $image = $blog["image"];
                            $author = $blog["author"];
                            $title = $blog["title"];
                            $date = $blog["date"];
                            $post = $blog["post"];
                            $id = $blog["id"];

                    ?>

                    <div class="blog-post">

                        <div class="post-thumb">
                            <a href="single-post.php?id=<?php echo $id;?>"><img class="img-fluid" src="img/blog/blog1.jpg" alt=""></a>
                            <div class="hover-wrap"></div>
                        </div>
                        
                        <div class="post-content">
                            <div class="meta">
                                <span class="meta-part"><a href="#"><i class="lni-user"></i> <?php echo $author;?></a></span>
                                <span class="meta-part"><a href="#"><i class="lni-alarm-clock"></i> <?php echo $date;?></a></span>
                                <span class="meta-part"><a href="#"><i class="lni-folder"></i> Sticky</a></span>
                                <span class="meta-part"><a href="#"><i class="lni-comments-alt"></i> 1 Comments</a></span>
                            </div>
                            <h2 class="post-title"><a href="single-post.php?id=<?php echo $id;?>"> <?php echo $title;?></a></h2>
                            <div class="entry-summary">
                                <p> 
                                    <?php echo $post;?>
                                </p>
                            </div>
                            <a href="single-post.php?id=<?php echo $id;?>" class="btn btn-common">Read More</a>
                        </div>

                    </div>

                    <?php endwhile;?>
                   
                    <div class="pagination-bar">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
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
                                    <strong><i class="lni-phone"></i></strong><span>+234 706 681 8156</span>
                                </li>
                                <li>
                                    <strong><i class="lni-envelope"></i></strong><span><a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="99faf6f7edf8faedd9f4f8f0f5b7faf6f4">[email&#160;protected]</a> <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82f1f7f2f2edf0f6c2efe3ebeeace1edef">[email&#160;protected]</a></span>
                                </li>
                                <li>
                                    <strong><i class="lni-map-marker"></i></strong><span><a href="#">45 marina avenue, Lagos <br>Ng 45</a></span>
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

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>


    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
</body>


</html>