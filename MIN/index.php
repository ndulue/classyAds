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

    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" class="color-changing" href="css/color.css">

</head>

<body>

    <header id="header-wrap">

        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-5 col-xs-12">

                        <ul class="list-inline">
                            <li><i class="lni-phone"></i> +2347066818156</li>
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
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <div class="post-btn">
                        <a class="btn btn-common" href="dashboard-subcription.php"><i class="lni-pencil-alt"></i> Post an Ad</a>
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
                    <a href="blog.php">Blog</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="ads-details.php">Ads Details</a></li>
                        <li><a href="pricing.php">Packages</a></li>
                        <li><a href="testimonial.php">Testimonial</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.php">Contact Us</a>
                </li>
            </ul>

        </nav>

    </header>


    <div id="main-slide" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slider/slider-bg1.jpg" alt="First slide">
                <div class="carousel-caption d-md-block">
                    <h1 class="animated wow fadeInDown hero-heading" data-wow-delay=".4s">Welcome to The Largest Marketplace</h1>
                    <p class="animated fadeInUp wow hero-sub-heading" data-wow-delay=".6s">Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slider/slider-bg2.jpg" alt="Second slide">
                <div class="carousel-caption d-md-block">
                    <h1 class="animated wow fadeInLeft hero-heading" data-wow-delay=".7s">Post Free Ads</h1>
                    <p class="animated wow fadeInRight hero-sub-heading" data-wow-delay=".9s">Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slider/slider-bg3.jpg" alt="Third slide">
                <div class="carousel-caption d-md-block">
                    <h1 class="animated wow fadeInDown hero-heading" data-wow-delay=".6s">Get More Sell and More Exposure</h1>
                    <p class="animated fadeInUp wow hero-sub-heading" data-wow-delay=".8s">Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left" data-ripple-color="#F0F0F0"></i></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right" data-ripple-color="#F0F0F0"></i></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="search-button">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="search-bar">
                        <div class="search-inner">
                            <form class="search-form">
                                <div class="form-group inputwithicon">
                                    <i class="lni-tag"></i>
                                    <input type="text" name="customword" class="form-control" placeholder="What are you looking for?">
                                </div>
                                <div class="form-group inputwithicon">
                                    <i class="lni-target"></i>
                                    <div class="select">
                                        <select>
                                        <option value="none">Locations</option>
                                        <option value="none">Lagos</option>
                                        <option value="none">Kano</option>
                                        <option value="none">Kaduna</option>
                                        <option value="none">Abuja</option>
                                        <option value="none">Port Harcourt</option>
                                        <option value="none">Delta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group inputwithicon">
                                    <i class="lni-menu"></i>
                                    <div class="select">
                                        <select>
                                        <option value="none">Select Catagory</option>
                                        <option value="none">Jobs</option>
                                        <option value="none">Electronics</option>
                                        <option value="none">Mobile</option>
                                        <option value="none">Training</option>
                                        <option value="none">Pets</option>
                                        <option value="none">Real Estate</option>
                                        <option value="none">Services</option>
                                        <option value="none">Training</option>
                                        <option value="none">Vehicles</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-common" type="button"><i class="lni-search"></i> Search Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="categories-icon bg-light section-padding">
        <div class="container">
            <h1 class="section-title">Ads By Category</h1>
            <div class="row">
                <?php
                    $sql = 'SELECT * FROM category';
                    $cat = $conn->query($sql);

                    while ($category = $cat->fetch_assoc()):
                        $id = $category['id'];
                        $cat_name = $category['category'];
                        $cat_icon = $category['icon'];
                ?>        
                        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6">
                            <a href="category.php?id=<?php echo $id;?>">
                                <div class="icon-box">
                                    <div class="icon">
                                        <i class="<?php echo $cat_icon;?>"></i>
                                    </div>
                                    <h4><?php echo $cat_name;?></h4>
                                </div>
                            </a>
                        </div>
                <?php endwhile; ?>    
                +
            </div>
        </div>
    </section>

    <section class="featured section-padding"> 
        <div class="container">
            <h1 class="section-title">Latest Products</h1>
            <div class="row">

                <?php
                    $sql = 'SELECT * FROM product ORDER BY rand() limit 6';
                    $result = $conn->query($sql);

                    while($product = $result->fetch_assoc()):
                    $product_id = $product['id'];
                    $product_image = $product['product_image'];
                    $product_category = $product['product_category'];
                    $product_time = $product['product_time'];
                    $product_name = $product['product_name'];
                    $product_seller = $product['product_seller'];
                    $product_tag = $product['product_tag'];
                    $product_brand = $product['product_brand'];
                    $product_location = $product['product_location'];
                    $product_price = $product['product_price'];

                ?>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                    <div class="featured-box">
                        <figure>
                            <div class="icon">
                                <span class="bg-green"><i class="lni-heart"></i></span>
                                <span><i class="lni-bookmark"></i></span>
                            </div>
                            <a href="ads-details.php?id=<?php echo $product_id;?>"><img class="img-fluid" src="<?php echo $product_image;?>" alt=""></a>
                        </figure>
                        <div class="feature-content">
                            <div class="product">
                                <a href="category.php?category=<?php echo $product_category;?>"><?php echo $product_category;?></a>
                            </div>
                            <h4><a href="ads-details.php?id=<?php echo $product_id;?>"><?php echo $product_name;?>.</a></h4>
                            <div class="meta-tag">
                                <span>
                                <a href="#"><i class="lni-user"></i><?php echo $product_seller;?></a>
                                </span>
                                <span>
                                <i class="lni-map-marker"></i><?php echo $product_location;?>
                                </span>
                                <span>
                                <i class="lni-tag"></i><?php echo $product_tag;?>
                                </span>
                            </div>
                            <?php
                                $sql = "SELECT LEFT()";
                            ?>
                            <p class="dsc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            <div class="listing-bottom">
                                <h3 class="price float-left"><?php echo $product_price;?></h3>
                                <a href="ads-details.php?id=<?php echo $product_id;?>" class="btn btn-common float-right">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endwhile;?>
            </div>
        </div>
    </section>


    <section class="works section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title">How It Works?</h3>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="lni-users"></i>
                        </div>
                        <p>Create an Account</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="lni-bookmark-alt"></i>
                        </div>
                        <p>Post Free Ad</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="lni-thumbs-up"></i>
                        </div>
                        <p>Deal Done</p>
                    </div>
                </div>
                <hr class="works-line">
            </div>
        </div>
    </section>


    <div class="call-back section-padding bg-light">
        <div class="container">
            <h4>Request a Free Call Back</h4>
            <div class="row">
            <?php 
                $name = $email = $phone = "";
                $name_err = $email_err = $phone_err = "";
                           
            ?>  
                <div class="col-lg-8 col-md-6 col-xs-12">
                    <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group has-error">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                    <span class="error"><?php echo $name_err;?></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group has-error">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <span class="error"><?php echo $email_err;?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group has-error">
                                    <input type="text" class="form-control" id="phone" name="name" placeholder="Phone">
                                    <span class="error"><?php echo $phone_err;?></span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-common" id="phone" name="submit" value="Send">
                    </form>
                </div>

            <?php 
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    if (empty($_POST["name"]) && strlen($_POST["name"]) < 3) {
                        $name_err = "Please fill in your name";
                    } else {
                        $name = test_input($_POST["name"]);

                        if(!preg_match("/^[a-zA-Z]*$/", $name)){
                            $name_err = "Only letters and whitespaces are allowed";
                        }
                    }

                    if(empty($_POST["email"])){
                        $email_err = "Please fill in your email address";
                    }else {
                        $email = test_input($_POST["email"]);
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $email_err = "Invalid email address";
                        }
                    }

                    if (empty($_POST["phone"])) {
                        $phone_err = "Please fill in your phone number";
                    }else {
                        $phone = test_input($_POST["number"]);
                        if(!filter_var($phone, FILTER_VALIDATE_INT)){
                            $phone_err = "Invalid phone number";
                        }
                    }

                    $stmt = $conn->prepare("INSERT INTO `quote` (`name`,`email`,`phone`) VALUES (?,?,?)");
                    $stmt->bind_param("ssi",$name, $email, $phone);
                    $stmt->execute();
                    $stmt->close();
                }

                function test_input($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);

                    return $data;
                }
            ?>
              
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="call-us">
                        <div class="icon">
                            <i class="lni-phone"></i>
                        </div>
                        <div class="contact-text">
                            <span>Get Free Update</span>
                            <h5 class="phone-num">+2347 066 818 156</h5>
                            <p>Monday - Saturday / 9:00 - 8:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="pricing-table" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Pricing Plan</h2>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table">
                        <div class="icon">
                            <i class="lni-gift"></i>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value">#2500</p>
                        </div>
                        <div class="title">
                            <h3>Basic</h3>
                        </div>
                        <ul class="description">
                            <li>Free ad posting</li>
                            <li>No Featured ads availability</li>
                            <li>Access to limited features</li>
                            <li>For 30 days</li>
                            <li>100% Secure!</li>
                        </ul>
                        <button class="btn btn-common">Purchase</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table" id="active-tb">
                        <div class="icon">
                            <i class="lni-leaf"></i>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value">#5000</p>
                        </div>
                        <div class="title">
                            <h3>Standard</h3>
                        </div>
                        <ul class="description">
                            <li>Free ad posting</li>
                            <li>10 Featured ads availability</li>
                            <li>Access to unlimited features</li>
                            <li>For 30 days</li>
                            <li>100% Secure!</li>
                        </ul>
                        <button class="btn btn-common">Purchase</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="table">
                        <div class="icon">
                            <i class="lni-layers"></i>
                        </div>
                        <div class="pricing-header">
                            <p class="price-value">#7500</p>
                        </div>
                        <div class="title">
                            <h3>Premium</h3>
                        </div>
                        <ul class="description">
                            <li>Free ad posting</li>
                            <li>100 Featured ads availability</li>
                            <li>Access to unlimited features</li>
                            <li>For 30 days</li>
                            <li>100% Secure!</li>
                        </ul>
                        <button class="btn btn-common">Purchase</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="counter-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 work-counter-widget">
                    <div class="counter">
                        <div class="icon"><i class="lni-layers"></i></div>
                        <h2 class="counterUp">83</h2>
                        <p>Ad Posted</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 work-counter-widget">
                    <div class="counter">
                        <div class="icon"><i class="lni-users"></i></div>
                        <h2 class="counterUp">54</h2>
                        <p>Members</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 work-counter-widget">
                    <div class="counter">
                        <div class="icon"><i class="lni-briefcase"></i></div>
                        <h2 class="counterUp">201</h2>
                        <p>Premium Ads</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 work-counter-widget">
                    <div class="counter">
                        <div class="icon"><i class="lni-map"></i></div>
                        <h2 class="counterUp">28</h2>
                        <p>Locations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="section-padding">

        <div class="container">
            <h2 class="section-title">
                Blog Post
            </h2>
            <div class="row">

                <?php 
                    $sql = "SELECT `id`, `image`, `author`, `date`, `title`, `post`  FROM `blog` ORDER BY rand() LIMIT 3";
                    $result = $conn->query($sql);

                    while($blog = $result->fetch_assoc()):
                    $id = $blog['id'];
                    $image = $blog['image'];
                    $author = $blog['author'];
                    $date = $blog['date'];
                    $title = $blog['title'];
                   // $post = $blog['LEFT(post, 30)'];

                ?>
                <div class="col-lg-4 col-md-6 col-xs-12 blog-item">

                    <div class="blog-item-wrapper">
                        <div class="blog-item-img">
                            <a href="single-post.php?id=<?php echo $id;?>">
                                <img src="<?php echo $image;?>" alt="<?php echo $image;?>">
                            </a>
                        </div>
                        <div class="blog-item-text">
                            <div class="meta-tags">
                                <span class="user float-left"><a href="#"><i class="lni-user"></i>Posted By <?php echo $author;?></a></span>
                                <span class="date float-right"><i class="lni-calendar"></i><?php echo $date;?></span>
                            </div>
                            <h3>
                                <a href="single-post.php?id=<?php echo $id;?>"><?php echo $title;?></a>
                            </h3>

                            <p>
                                
                            </p>
                            <a href="single-post.php?id=<?php echo $id;?>" class="btn btn-common">Read More</a>
                        </div>
                    </div>

                </div>

                <?php endwhile;?>
            </div>
        </div>
    </section>


    <section class="subscribes section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="subscribes-inner">
                        <div class="icon">
                            <i class="lni-pointer"></i>
                        </div>
                        <div class="sub-text">
                            <h3>Subscribe to Newsletter</h3>
                            <p>and receive new ads in inbox</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form>
                        <div class="subscribe">
                            <?php 
                                $subscribe_err = "";
                                $subcribre_email = "";
                            ?>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
                                <input class="form-control" name="subscribe_email" placeholder="Enter your Email" required="" type="email">
                                <span class="subscribe_err"><?php echo $subscribe_err;?></span>
                                <input class="btn btn-common" name="Subscribe" required="" type="submit" value="Subscribe">
                            </form>
                            <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    if (empty($_POST["subscribe_email"])) {
                                        $subscribe_err = "Please enter enter your email address";                                        
                                    }else {
                                        $subcribe_email = text_input($_POST['subscribe_email']);

                                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                            $subscribe_err = "invalid email address";
                                        }
                                    }

                                    $stmt = $conn->prepare("INSERT INTO `subscription` (`email`) VALUES (?)");
                                    $stmt->bind_param("s", $subcribe_email);
                                    $stmt->execute();
                                    $stmt->close();
                                }

                                function text_input($data){
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer>

        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
                        <div class="widget">
                            <div class="footer-logo"><img src="" alt=""></div>
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
                                    <strong><i class="lni-phone"></i></strong><span>+1 555 444 66647 <br> +1 555 444 66647</span>
                                </li>
                                <li>
                                    <strong><i class="lni-envelope"></i></strong><span><a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="88ebe7e6fce9ebfcc8e5e9e1e4a6ebe7e5">[email&#160;protected]</a> <br> <a href="http://preview.uideck.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f4878184849b8680b499959d98da979b99">[email&#160;protected]</a></span>
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
    <script src="js/summernote.js "></script>
</body>


</html>