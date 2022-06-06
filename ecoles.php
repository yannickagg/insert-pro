<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ISTC INSERT PRO - Vivier d'entreprise</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    
        <!-- CSS
        ============================================ -->
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    
        <!-- Icon Font CSS -->
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/vendor/flaticon.css">
    
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="assets/css/plugins/slick.css">
    
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    
    </head>

<body>

<?php 

require("header.php")

    ?>


    <!--Offcanvas Section Start-->
    <div id="offcanvas" class="offcanvas-section">
        <button class="offcanvas-close" data-bs-target="#offcanvas">&times;</button>
        <div class="offcanvas-wrap">
            <div class="inner">

                <!-- Offcanvas user Start -->
                <div class="offcanvas-user">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginSignupModal" data-bs-target-sub="#login">Login</a>
                    <span>or</span>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginSignupModal" data-bs-target-sub="#signup">Sign up</a>
                </div>
                <!-- Offcanvas user End -->

                <!-- Offcanvas Menu Start -->
                <div class="offcanvas-menu">
                    <nav>
                        <ul>
                            <li class="has-children"><a href="index.php">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.php">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="job-list.html">Jobs</a>
                                <ul class="sub-menu">
                                    <li><a href="job-list.html">Job List</a></li>
                                    <li><a href="job-single.html">Job Single</a></li>
                                </ul>
                            </li>
                            <li><a href="company-list.html">Company</a>
                                <ul class="sub-menu">
                                    <li><a href="company-list.html">Company List</a></li>
                                    <li><a href="company-single.html">Company Single</a></li>
                                    <li><a href="create-job.html">Create Job</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="faq.html">FAQ'S</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact us</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Offcanvas Menu End -->

            </div>
        </div>
    </div>
    <!--Offcanvas Section End-->
    <!--OffCanvas Overlay-->
    <div class="offcanvas-overlay"></div>


    <div class="loginSignupModal modal fade" id="loginSignupModal" tabindex="-1" role="dialog" aria-labelledby="loginSignupModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <ul class="loginSignupNav nav" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign up</a>
                        </li>
                    </ul>

                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <form>
                                <div class="row mb-n3">
                                    <div class="col-12 mb-3"><input type="email" placeholder="Email"></div>
                                    <div class="col-12 mb-3"><input type="password" placeholder="Password"></div>
                                    <div class="col-12 mb-3">
                                        <div class="row justify-content-between mb-n2">
                                            <div class="col-auto mb-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="remember-me" id="remember-me" value="checkedValue" class="custom-control-input">
                                                    <label class="custom-control-label" for="remember-me">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2"><a href="#">Forgot Password?</a></div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Login"></div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col text-center">
                                        <p class="text-muted">Or Login With</p>
                                        <div class="login-reg-social">
                                            <a target="_blank" rel="noopener" href="https://www.facebook.com/" class="fa fa-facebook"></a>
                                            <a target="_blank" rel="noopener" href="https://www.twitter.com/" class="fa fa-twitter"></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a target="_blank" rel="noopener" href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                            <form>
                                <div class="row mb-n3">
                                    <div class="col-12 mb-3"><input type="text" placeholder="Your Name"></div>
                                    <div class="col-12 mb-3"><input type="email" placeholder="Your Email Address"></div>
                                    <div class="col-12 mb-3"><input type="password" placeholder="Choose a Password"></div>
                                    <div class="col-12 mb-3"><input class="btn btn-primary w-100" type="submit" value="Sign Up"></div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col text-center">
                                        <p class="text-muted">Or Register With</p>
                                        <div class="login-reg-social">
                                            <a target="_blank" rel="noopener" href="https://www.facebook.com/" class="fa fa-facebook"></a>
                                            <a target="_blank" rel="noopener" href="https://www.twitter.com/" class="fa fa-twitter"></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                            <a target="_blank" rel="noopener" href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Heading Section Start -->
    <div class="page-heading-section section bg-parallax" data-bg-image="assets/images/bg/bg-1.jpg" data-overlay="50">
        <div class="container">
            <div class="page-heading-content text-center">
                <h3 class="title">Nos écoles</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item active">Ecoles</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Page Heading Section End -->

    <!-- Company List Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row mb-n5">

                <div class="col-lg-8 col-12 mb-5 pe-lg-5">

                    <!-- Company List Wrap Start -->
                    <div class="company-list-wrap row">

                        <!-- Company List Start -->
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                            <a href="ej.html" class="company-list">
                                <span class="company-logo"><img src="assets/images/companies/company-1.png" alt="company-1"></span>
                                <h6 class="title">EJ-ISTC</h6>
                                <span class="open-job">L´École de </br>journalisme</span>
                                
                            </a>
                        </div>
                        <!-- Company List Start -->

                        <!-- Company List Start -->
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                            <a href="company-single.html" class="company-list">
                                <span class="company-logo"><img src="assets/images/companies/company-2.png" alt="company-1"></span>
                                <h6 class="title">EPA-ISTC</h6>
                                <span class="open-job">L´École de Production Audiovisuelle</span>
                               
                            </a>
                        </div>
                        <!-- Company List Start -->

                        <!-- Company List Start -->
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                            <a href="company-single.html" class="company-list">
                                <span class="company-logo"><img src="assets/images/companies/company-3.png" alt="company-1"></span>
                                <h6 class="title">ETTA-ISTC</h6>
                                <span class="open-job">Télécommunication et des Technologies de l´Audiovisuel</span>
                                
                            </a>
                        </div>
                        <!-- Company List Start -->

                        <!-- Company List Start -->
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                            <a href="company-single.html" class="company-list">
                                <span class="company-logo"><img src="assets/images/companies/company-4.png" alt="company-1"></span>
                                <h6 class="title">EPM-ISTC</h6>
                                <span class="open-job">L´École de Publicité-Marketing</span>
                                
                            </a>
                        </div>
                        <!-- Company List Start -->

                        <!-- Company List Start -->
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                            <a href="company-single.html" class="company-list">
                                <span class="company-logo"><img src="assets/images/companies/company-5.png" alt="company-1"></span>
                                <h6 class="title">EAIN-ISTC</h6>
                                <span class="open-job">L´École des Arts et Images et Numériques</span>
                             
                            </a>
                        </div>
                        <!-- Company List Start -->

                        

                    </div>
                    <!-- Company List Wrap Start -->

                   
                </div>

                <!-- Company Sidebar Wrap Start -->
                <div class="col-lg-4 col-12 mb-5">
                    <div class="sidebar-wrap">
                        
                        <!-- Sidebar (Search) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <a class="banner" href="https://https://www.istcpolytechnique.ci/" target="_blank"><img src="assets/images/banner/banner-1.jpg" alt="Banner"></a>
                            </div>
                        </div>
                        <!-- Sidebar (Search) End -->
                    </div>
                </div>
                <!-- Company Sidebar Wrap End -->

            </div>
        </div>
    </div>
    <!-- Company List End -->
    <?php 

require("footer.php")

    ?>


    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.min.js"></script>
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <script src="assets/js/plugins/jquery.parallax.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/jquery.scrollUp.min.js"></script>

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>