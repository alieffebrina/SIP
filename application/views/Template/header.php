<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Yummy Blog - Food Blog Template</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url() ?>assets/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="<?php echo base_url() ?>assets/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url() ?>assets/css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>

    <!-- ****** Top Header Area Start ****** -->
    <div class="top_header_area">
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                    <!--  Top Social bar start -->
                    <div class="top_social_bar">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                </div>
                </div>
                <div class="col-7 col-sm-6">
                    <div class="top_social_bar">

                        <a href="#"></a><a href="#"></a><a href="#"></a>
                        <a href="#"><?php echo $this->session->userdata('username');?></a>
                        <a href="<?php echo site_url('C_Login/logout'); ?>">Logout</a>
                </div>
                </div>
            
        </div>
    </div>
    <!-- ****** Top Header Area End ****** -->

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a href="index.html" class="yummy-logo">SIP</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav" aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
                            <ul class="navbar-nav" id="yummy-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo site_url('Welcome'); ?>">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="yummyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <div class="dropdown-menu" aria-labelledby="yummyDropdown">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="archive.html">Archive</a>
                                        <a class="dropdown-item" href="single.html">Single Blog</a>
                                        <a class="dropdown-item" href="static.html">Static Page</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('C_kegiatan'); ?>" class="nav-link" >Kegiatan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="archive.html">Archive</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->
    <!-- ****** Welcome Post Area Start ****** -->
    <section class="welcome-post-sliders owl-carousel">
     <?php 
        $no = $this->uri->segment('3') + 1;
        foreach($tb_detailkegiatan as $listdetail){ ?>
        <!-- Single Slide -->
        <div class="welcome-single-slide">
            <!-- Post Thumb -->
             <img src="<?php echo base_url() ?>assets/fotokegiatan/<?php echo $listdetail->foto_detail; ?>" alt="">
            <!-- Overlay Text -->
            <div class="project_title">
                <div class="post-date-commnents d-flex">
                    <a href="#"><?php echo $listdetail->tgl_kegiatan;?></a>
                    <a href="#">5 Comment</a>
                </div>
                <a href="#">
                    <h5> <?php echo $listdetail->judul; ?></h5>
                </a>
            </div>
        </div>
    <?php } ?>

    </section>
    <p></p>
    <!-- ****** Welcome Area End ****** -->