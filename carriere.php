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
                            <li class="has-children"><a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home One</a></li>
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
                <h3 class="title">Blog Right Sidebar</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Blog Right Sidebar</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Page Heading Section End -->

    <!-- Blog Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row mb-n5">

                <div class="col-lg-8 col-12 mb-5 pe-lg-5">

                    <!-- Blog Wrapper Start -->
                    <div class="blog-wrap row">

                        <!-- Blog Start -->
                        <div class="col-md-6 col-12">
                            <div class="blog">
                                <div class="media">
                                    <a href="blog-single.html"><img src="assets/images/blog/blog-1.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="blog-single.html">The Top 5 Job Interview Questions For IT Professional</a></h6>
                                    <ul class="meta">
                                        <li>Posted on 25 Jan, 2022</li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                    <div class="desc">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                                    </div>
                                    <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog End -->

                        <!-- Blog Start -->
                        <div class="col-md-6 col-12">
                            <div class="blog">
                                <div class="media">
                                    <a href="blog-single.html"><img src="assets/images/blog/blog-2.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="blog-single.html">7 Careers To Consider If You Love Traveling</a></h6>
                                    <ul class="meta">
                                        <li>Posted on 25 Jan, 2022</li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                    <div class="desc">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                                    </div>
                                    <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog End -->

                        <!-- Blog Start -->
                        <div class="col-md-6 col-12">
                            <div class="blog">
                                <div class="media">
                                    <a href="blog-single.html"><img src="assets/images/blog/blog-3.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="blog-single.html">When the Perfect Candidate Turns Out To Be an Imperfect Fit</a></h6>
                                    <ul class="meta">
                                        <li>Posted on 25 Jan, 2022</li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                    <div class="desc">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                                    </div>
                                    <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog End -->

                        <!-- Blog Start -->
                        <div class="col-md-6 col-12">
                            <div class="blog">
                                <div class="media">
                                    <a href="blog-single.html"><img src="assets/images/blog/blog-4.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="blog-single.html">5 ways to keep calm and carry on during your job search</a></h6>
                                    <ul class="meta">
                                        <li>Posted on 25 Jan, 2022</li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                    <div class="desc">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                                    </div>
                                    <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog End -->

                        <!-- Blog Start -->
                        <div class="col-md-6 col-12">
                            <div class="blog">
                                <div class="media">
                                    <a href="blog-single.html"><img src="assets/images/blog/blog-5.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="blog-single.html">Should I reapply for a job vacancy that was reposted?</a></h6>
                                    <ul class="meta">
                                        <li>Posted on 25 Jan, 2022</li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                    <div class="desc">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                                    </div>
                                    <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog End -->

                        <!-- Blog Start -->
                        <div class="col-md-6 col-12">
                            <div class="blog">
                                <div class="media">
                                    <a href="blog-single.html"><img src="assets/images/blog/blog-6.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="blog-single.html">Make a Career Change Using These Steps</a></h6>
                                    <ul class="meta">
                                        <li>Posted on 25 Jan, 2022</li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                    <div class="desc">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                                    </div>
                                    <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog End -->

                        <!-- Blog Start -->
                        <div class="col-md-6 col-12">
                            <div class="blog">
                                <div class="media">
                                    <a href="blog-single.html"><img src="assets/images/blog/blog-7.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="blog-single.html">5 Ways Your Resume Is Selling You Short</a></h6>
                                    <ul class="meta">
                                        <li>Posted on 25 Jan, 2022</li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                    <div class="desc">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                                    </div>
                                    <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog End -->

                        <!-- Blog Start -->
                        <div class="col-md-6 col-12">
                            <div class="blog">
                                <div class="media">
                                    <a href="blog-single.html"><img src="assets/images/blog/blog-8.jpg" alt=""></a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="blog-single.html">How to Answer ???Where Do You See Yourself in 5 Years???? </a></h6>
                                    <ul class="meta">
                                        <li>Posted on 25 Jan, 2022</li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                    <div class="desc">
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium fugiat fugit voluptates ut rem vitae.</p>
                                    </div>
                                    <a href="blog-single.html" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog End -->

                    </div>
                    <!-- Blog Wrapper End -->

                    <!-- Pagination Start -->
                    <ul class="pagination pagination-center mt-5">
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                    <!-- Pagination End -->

                </div>

                <!-- Blog Sidebar Wrap Start -->
                <div class="col-lg-4 col-12 mb-5">
                    <div class="sidebar-wrap">
                        <!-- Sidebar (Search) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Search Keywords</h6>
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                </form>
                            </div>
                        </div>
                        <!-- Sidebar (Search) End -->

                        <!-- Sidebar (Recent Posts) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Recent Posts</h6>
                                <ul class="sidebar-post">
                                    <li>
                                        <a href="blog-single.html" class="image"><img src="assets/images/blog/sidebar-1.jpg" alt=""></a>
                                        <a href="blog-single.html" class="title">The Top 5 Job Interview Questions For IT Professional</a>
                                    </li>
                                    <li>
                                        <a href="blog-single.html" class="image"><img src="assets/images/blog/sidebar-2.jpg" alt=""></a>
                                        <a href="blog-single.html" class="title">7 Careers To Consider If You Love Traveling</a>
                                    </li>
                                    <li>
                                        <a href="blog-single.html" class="image"><img src="assets/images/blog/sidebar-3.jpg" alt=""></a>
                                        <a href="blog-single.html" class="title">When the Perfect Candidate Turns Out To Be an Imperfect Fit</a>
                                    </li>
                                    <li>
                                        <a href="blog-single.html" class="image"><img src="assets/images/blog/sidebar-4.jpg" alt=""></a>
                                        <a href="blog-single.html" class="title">5 ways to keep calm and carry on during your job search</a>
                                    </li>
                                    <li>
                                        <a href="blog-single.html" class="image"><img src="assets/images/blog/sidebar-5.jpg" alt=""></a>
                                        <a href="blog-single.html" class="title">Should I reapply for a job vacancy that was reposted?</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar (Recent Posts) End -->

                        <!-- Sidebar (Recent Comments) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Recent Comments</h6>
                                <ul class="sidebar-list sidebar-list-comment">
                                    <li>Theresa Tran on <a href="blog-single.html">The Top 5 Job Interview Questions For IT Professional</a>
                                    </li>
                                    <li>admin on <a href="blog-single.html">7 Careers To Consider If You Love Traveling</a>
                                    </li>
                                    <li>Jessica Brewer on <a href="blog-single.html">When the Perfect Candidate Turns Out To Be an Imperfect Fit</a>
                                    </li>
                                    <li>Sharon Hall on <a href="blog-single.html">5 ways to keep calm and carry on during your job search</a>
                                    </li>
                                    <li>admin on <a href="blog-single.html">Should I reapply for a job vacancy that was reposted?</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar (Recent Comments) End -->

                        <!-- Sidebar (Category) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Category</h6>
                                <ul class="sidebar-list">
                                    <li><a href="#">Business</a>
                                    </li>
                                    <li><a href="#">Design & Creative</a>
                                    </li>
                                    <li><a href="#">Education</a>
                                    </li>
                                    <li><a href="#">IT & Computer</a>
                                    </li>
                                    <li><a href="#">Photography</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar (Category) End -->

                        <!-- Sidebar (Archives) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Archives</h6>
                                <ul class="sidebar-list">
                                    <li><a href="#">September 2022</a></li>
                                    <li><a href="#">August 2022</a></li>
                                    <li><a href="#">June 2022</a></li>
                                    <li><a href="#">May 2022</a></li>
                                    <li><a href="#">April 2022</a></li>
                                    <li><a href="#">March 2022</a></li>
                                    <li><a href="#">February 2022</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar (Archives) End -->
                    </div>
                </div>
                <!-- Blog Sidebar Wrap End -->

            </div>

        </div>
    </div>
    <!-- Blog Section End -->

    




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