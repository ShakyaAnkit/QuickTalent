<?php 
$pg = basename(substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'.'))); // get file name from url and strip extension
?>
<!DOCTYPE html>
<html lang="en">



<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Quick Talent Consulting Services</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/quicktalent__logo.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<link href="assets/css/nice-select.css" rel="stylesheet">


</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper"><!-- Preloader -->
<div class="loader-wrap">
            <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>        
            <div class="layer layer-three"><span class="overlay"></span></div>        
        </div>


        <!-- search-popup -->
        <!-- <div id="search-popup" class="search-popup">
            <div class="close-search"><i class="flaticon-close"></i></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="http://st.ourhtmldemo.com/new/Eazyrecruitz/index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                                <input type="submit" value="Search Now!" class="theme-btn style-four">
                            </fieldset>
                        </div>
                    </form>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="index.html">Finance</a></li>
                        <li><a href="index.html">Idea</a></li>
                        <li><a href="index.html">Service</a></li>
                        <li><a href="index.html">Growth</a></li>
                        <li><a href="index.html">Plan</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!-- search-popup end -->


        <!-- main header -->
        <header class="main-header">
            <div class="header-top">
                <div class="top-inner">
                    <ul class="left-info">
                        <li>
                            <i class="flaticon-phone-call"></i>
                            <p><span>call: </span><a href="tel:9740575254">(+91)974 057-5254</a></p>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <p><span>Mail: </span><a href="mailto:info@quicktalent.in">info@quicktalent.in</a></p>
                        </li>
                    </ul>
                    <!-- <div class="location-box">
                        <div class="location-carousel owl-carousel owl-theme owl-dots-none">
                            <p><span>Recent:</span> Business Development Manager, San Fransisco, CA.</p>
                            <p><span>Recent:</span> Business Development Manager, Landon, UK.</p>
                            <p><span>Recent:</span> Business Development Manager, New York.</p>
                        </div>
                        <div class="apply-btn"><a href="index.html">Apply Online<i class="flaticon-arrow-pointing-to-right"></i></a></div>
                    </div> -->
                    <div class="right-info">
                        <!-- <ul class="list">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contanct.php">Locations</a></li>
                            <li><a href="service.php">Resources</a></li>
                        </ul> -->
                        <ul class="social-links">
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-lower">
                <div class="outer-box clearfix">
                    <div class="menu-area pull-left clearfix">
                        <figure class="logo-box"><a href="index.php"><img src="assets/images/quick-logo.png" height="45px" width="149px" alt=""></a></figure>
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="<?php if($pg=='index'){?>current<?php }?> dropdown"><a href="index.php">Home</a>
                                       
                                    </li>
                                    <li class="<?php if($pg=='about' || $pg=='team'){?>current<?php }?> dropdown"><a href="about.php">About</a>
                                        <ul>
                                            <li><a href="about.php">About Company</a></li>
                                            <li><a href="team.php">Meet Our Team</a></li>
                                        </ul>
                                    </li>    
                                    <li class="<?php if($pg=='service' || $pg=='place-job'){?>current<?php }?> dropdown"><a href="place-job.php">Employers</a>
                                        <ul>
                                            
                                            <li><a href="place-job.php">Place Job Order</a></li>
                                            
                                            <li><a href="service.php">Solutions</a></li>
                                        </ul>
                                    </li> 
                                    <!-- <li class=" <?php if($pg=='service'){?>current<?php }?> dropdown"><a href="service.php">Solutions</a> -->
                                        
                                    </li>
                                    <li class="<?php if($pg=='overview' || $pg=='apply-now' || $pg=='faq' || $pg=='testimonials'){?>current<?php }?> dropdown"><a href="apply-now.php">Job Seekers</a>
                                        <!-- <ul>
                                          
                                           
                                            <li><a href="apply-now.php">Apply Now</a></li>
                                            <li><a href="faq.php">FAQ’s</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                        </ul> -->
                                    </li>
                                   
                                   
                                    <li class="<?php if($pg=='contact'){?>current<?php }?>"><a href="contact.php">Contact</a></li>               
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <ul class="menu-right-content pull-right clearfix">
                        <!-- <li>
                            <div class="search-btn">
                                <button type="button" class="search-toggler"><i class="flaticon-loupe-1"></i></button>
                            </div>
                        </li>
                        <li>
                            <div class="language">
                                <div class="lang-btn">
                                    <i class="icon flaticon-planet-earth"></i>
                                    <span class="txt">EN</span>
                                    <span class="arrow fa fa-angle-down"></span>
                                </div>
                                <div class="lang-dropdown">
                                    <ul>
                                        <li><a href="index.html">German</a></li>
                                        <li><a href="index.html">Italian</a></li>
                                        <li><a href="index.html">Chinese</a></li>
                                        <li><a href="index.html">Russian</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="index.html" class="theme-btn-one">Appointment</a>
                        </li> -->
                    </ul>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box clearfix">
                    <div class="menu-area pull-left">
                        <figure class="logo-box"><a href="index.html"><img src="assets/images/quick-talent.png" alt=""></a></figure>
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <ul class="menu-right-content pull-right clearfix">
                        <li>
                            <div class="search-btn">
                                <button type="button" class="search-toggler"><i class="flaticon-loupe-1"></i></button>
                            </div>
                        </li>
                        <li>
                            <div class="language">
                                <div class="lang-btn">
                                    <i class="icon flaticon-planet-earth"></i>
                                    <span class="txt">EN</span>
                                    <span class="arrow fa fa-angle-down"></span>
                                </div>
                                <div class="lang-dropdown">
                                    <ul>
                                        <li><a href="index.html">German</a></li>
                                        <li><a href="index.html">Italian</a></li>
                                        <li><a href="index.html">Chinese</a></li>
                                        <li><a href="index.html">Russian</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="index.html" class="theme-btn-one">Appointment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="assets/images/quick-logo.png" width="149px" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Lakeshore Garden, Vidhyaranyapura, Bengaluru</li>
                        <li><a href="tel:+9740575254">+91 9740575254</a></li>
                        <li><a href="mailto:info@quicktalent.in">info@quicktalent.in</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->