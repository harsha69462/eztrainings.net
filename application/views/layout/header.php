<!DOCTYPE html>
<html>
<head>
  <!-- meta tag -->
  <meta charset="utf-8">
  <title>ez Trainings</title>
  <meta name="description" content="">
  <!-- responsive tag -->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon -->
  <link rel="apple-touch-icon" href="assets/apple-touch-icon.html">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/logos/logo-black.png'); ?>">
  <!-- bootstrap v4 css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  <!-- font-awesome css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
  <!-- animate css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css'); ?>">
  <!-- owl.carousel css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>">
  <!-- slick css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/slick.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>">
  <!-- magnific popup css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>">
  <!-- Offcanvas CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/off-canvas.css'); ?>">
  <!-- flaticon css  -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/flaticon.css'); ?>">
  <!-- flaticon2 css  -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/fonts2/flaticon.css'); ?>">
  <!-- rsmenu CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/rsmenu-main.css'); ?>">
  <!-- rsmenu transitions CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/rsmenu-transitions.css'); ?>">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
  <!-- responsive css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css'); ?>">
</head>
<body class="inner-page">
  <!--Preloader area start here-->
  <div class="book_preload">
    <div class="book">
      <div class="book__page"></div>
      <div class="book__page"></div>
      <div class="book__page"></div>
    </div>
  </div>
  <!--Preloader area end here-->
  <!--Full width header Start-->
  <div class="full-width-header">

    <!-- Toolbar Start -->
    <div class="rs-toolbar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="rs-toolbar-left">
              <div class="welcome-message">
                <span><b>ez Training Solutions</b></span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="rs-toolbar-right">
              <div class="toolbar-share-icon">
                <ul>
                  <li><a href="https://www.instagram.com/invites/contact/?i=12r6lh05hrl9v&utm_content=g0tlzt1"><i class="fa fa-instagram"></i></a></li>
                  <li>|</li>
                  <?php if (isset($_SESSION['username'])): ?>
                    <li><a href="<?php echo base_url('user/dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-user"></i> Logout</a></li>
                  <?php else: ?>
                    <li><a href="<?php echo base_url('login'); ?>"><i class="fa fa-user"></i> Login</a></li>
                    <li><a href="<?php echo base_url('register'); ?>"><i class="fa fa-users"></i> Register</a></li>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Toolbar End -->


    <!--Header Start-->
    <header id="rs-header-2" class="rs-header-2">
      <!-- Menu Start -->
      <div class="menu-area menu-sticky">
        <div class="container">
          <div class="row rs-vertical-middle">
            <div class="col-lg-3 col-md-12">
              <div class="logo-area">
                <a href="<?php echo base_url(''); ?>"><img class="logo_custom2" src="<?php echo base_url('assets/images/logos/logo-white.png'); ?>" alt="logo"></a>
              </div>
            </div>
            <div class="col-lg-9 col-md-12">
              <div class="main-menu">
                <div class="row">
                  <div class="col-sm-12">
                    <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                    <nav class="rs-menu">
                      <ul class="nav-menu">
                        <!-- Home -->
                        <li class="current-menu-item current_page_item menu-item-has-children"> <a href="<?php echo base_url(''); ?>" class="home active">Home</a>
                        </li>
                        <!-- End Home -->
                        <!--About Menu Start-->
                        <li class="menu-item-has-children"> <a href="<?php echo base_url('aboutus'); ?>">About Us</a>
                        </li>
                        <!--About Menu End-->
                        <!-- Drop Down Pages Start -->
                        <li class="rs-mega-menu mega-rs"> <a href="#">Catalogue</a>
                          <ul class="mega-menu">
                            <li class="mega-menu-container">
                              <div class="mega-menu-innner">
                                <div class="single-magemenu">
                                  <ul class="sub-menu">
                                    <li> <a href="<?php echo base_url('workshops/pythonworkshop'); ?>">Python bundle course</a></li>
                                    <li><a href="<?php echo base_url('workshops/csharpworkshop'); ?>">C#</a></li>
                                    <li><a href="<?php echo base_url('workshops/webfullstackcourse'); ?>">Full Stack Web Development</a></li>
                                    <li><a href="<?php echo base_url('workshops/djangoworkshop'); ?>">Django</a></li>
                                    <li><a href="<?php echo base_url('workshops/angularworkshop'); ?>">Angular 9</a></li>
                                  </ul>
                                </div>
                                <div class="single-magemenu">
                                  <ul class="sub-menu">
                                    <li> <a href="<?php echo base_url('workshops/datascience'); ?>">Data Science using Python</a> </li>
                                    <li> <a href="<?php echo base_url('workshops/aiworkshop'); ?>">Arificial Intelligence</a> </li>
                                    <li> <a href="<?php echo base_url('workshops/mlworkshop'); ?>">Machine Learning</a> </li>
                                    <li> <a href="<?php echo base_url('workshops/awsworkshop'); ?>">Deep Dive Into AWS</a></li>
                                    <li> <a href="<?php echo base_url('workshops/englishworkshop'); ?>">Interview Trainings</a></li>
                                  </ul>
                                </div>
                                <div class="single-magemenu">
                                  <ul class="sub-menu">
                                    <li> <a href="<?php echo base_url('workshops/rprogramming'); ?>">R Programming</a> </li>
                                    <li><a href="<?php echo base_url('workshops/golang'); ?>">GoLang</a></li>
                                    <li> <a href="<?php echo base_url('workshops/ethicalhacking'); ?>">Ethical Hacking</a> </li>
                                    <li> <a href="<?php echo base_url('workshops/gamedevworkshop'); ?>">Game Development</a> </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <!--Drop Down Pages End -->

                        <!-- Courses Menu Start-->
                        <li class="menu-item-has-children"> <a href="<?php echo base_url('allcourses'); ?>">Courses</a>
                        </li>
                        <!-- <li class="menu-item-has-children"> <a href="<?php echo base_url('team'); ?>">Team</a>
                        </li> -->
                        <!--Courses Menu End-->
                        <!--blog Menu Start-->
                        <li class="menu-item-has-children"> <a href="<?php echo base_url('blogs'); ?>">Blog</a>
                        </li>
                        <!--blog Menu End-->
                        <!--Contact Menu Start-->
                        <li> <a href="<?php echo base_url('contactus'); ?>">Contact Us</a></li>
                        <!--Contact Menu End-->
                      </ul>
                    </nav>
                  </div>
                  <div class="searce-box">
                    <a class="rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Menu End -->
        </header>
        <!--Header End-->
      </div>
      <!--Full width header End-->
