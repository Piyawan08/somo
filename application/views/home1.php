<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Profile Piyawan</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body class="page">
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <h2>som-o</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href="https://twitter.com/piyawanqwe"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/piyawan23s"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/sxmopp_/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav m-auto">
                        <a href="<?php echo site_url('Mypage/index');?>" class="nav-item nav-link active ">Home</a>
                        <a href="<?php echo site_url('Mypage/link1');?>" class="nav-item nav-link ">About</a>
                        <a href="<?php echo site_url('Mypage/link2');?>" class="nav-item nav-link">Activity</a>
                        <a href="<?php echo site_url('Mypage/link4');?>" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="<?php echo base_url('img');?>/som-1.JPEG" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Piyawan Tathip</h1>
                            <p>
                               som-o
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        
        <!-- Fact Start -->
        <div class="fact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="<?php echo base_url('img');?>/icon-4.png" alt="Icon">
                            <h2>Teamwork</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="<?php echo base_url('img');?>/icon-1.png" alt="Icon">
                            <h2>Fast Learning</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="<?php echo base_url('img');?>/icon-8.png" alt="Icon">
                            <h2>relationship</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="<?php echo base_url('img');?>/icon-6.png" alt="Icon">
                            <h2>Positive attitude</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->
        

        <!-- About Start -->
        <div class="about mt-125">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="about-img">
                            <div class="about-img-1">
                            <img src="<?php echo base_url('img');?>/som-3.JPEG" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            <h4>- Information Technology -</h4>
                            <h3>Rajamangala University of Technology Lanna Tak</h3>
                            <a href="<?php echo site_url('Mypage/link1');?>" target="_blank">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header">
                    <h2>ผลงาน</h2><br>
                    <a href="<?php echo site_url('Mypage/link2');?>" target="_blank">Read More</a>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="<?php echo base_url('img');?>/icon-2.png" alt="Icon">
                            <p>
                                การใช้ AI
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                        <img src="<?php echo base_url('img');?>/icon-1.png" alt="Icon">
                            <p>
                                การใช้ Pr
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="<?php echo base_url('img');?>/icon-3.png" alt="Icon">
                            <p>
                                Infographics
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="<?php echo base_url('img');?>/icon-4.png" alt="Icon">
                            <p>
                                กิจกรรมต่างๆ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-30">
                        <div class="row">
                            <div class="col-md-30">  
                                <div class="footer-contact">
                                    <h2>ติดต่อ</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>77/12 ถนนมหาดไทยบำรุง ต.หนองหลวง อ.เมือง จ.ตาก,63000</p>
                                    <p><i class="fa fa-phone-alt"></i>+66 639241027</p>
                                    <p><i class="fa fa-envelope"></i>piyawan23s5@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
