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
                    <a href="<?php echo site_url('Mypage/index');?>" class="nav-item nav-link  ">Home</a>
                        <a href="<?php echo site_url('Mypage/link1');?>" class="nav-item nav-link ">About</a>
                        <a href="<?php echo site_url('Mypage/link2');?>" class="nav-item nav-link active">Activity</a>
                        <a href="<?php echo site_url('Mypage/link4');?>" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        <div class="row">
                    <div class="col-md-6">
                        <div class="blog-item"><br><br>
                            <div class="blog-img" align='center'>
                                <img src="<?php echo base_url('img');?>/som-10.png" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title" align='center'>New Gen New Normal</h2>
                                
                                <div class="blog-text" align='center'>
                                    <p>
                                    โครงการประชุมสัมมนา เรื่อง เสริมสร้างสุขภาพและกำลังใจเพื่ออนาคตในยุค “New Normal” (New Gen New Normal) ณ มหาวิทยาลัยราชภัฏพิบูลสงคราม จังหวัดพิษณุโลก 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item"><br><br>
                            <div class="blog-img" align='center'>
                                <img src="<?php echo base_url('img');?>/som-8.png" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title" align='center'>Infographics</h2>
                                <div class="blog-text" align='center'>
                                    <p>
                                        การออกแบบอินโฟกราฟิกส์ ประชาสัมพันธ์หลักสูตร สาขาวิชาเทคโนโลยีสารสนเทศ คณะวิทยาศาสตร์และเทคโนโลยีการเกษตร มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนาตาก
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="row">
            <div class="col-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item active"><a class="page-link" href="<?php echo site_url('Mypage/link3');?>">1</a></li>
                    <li class="page-item "><a class="page-link" href="<?php echo site_url('Mypage/link2');?>">2</a></li>
                </ul> 
            </div>
        </div>