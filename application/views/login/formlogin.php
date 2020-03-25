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

    <!-- Background Pattern Swither -->
    
    <!-- ****** Top Header Area Start ****** -->
    <!-- ****** Top Header Area End ****** -->

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
            </div>

            <!-- ****** Footer Menu Area Start ****** -->
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content">
                        <!-- Logo Area Start -->
                        <div class="footer-logo-area text-center">
                            <a href="index.html" class="yummy-logo">SIP</a>
                        </div>
                        <!-- Menu Area Start -->
                        <div class="login-box">
                                                <!-- /.login-logo -->
                          <div style="color: red;margin-bottom: 15px;">
                            <?php
                            // Cek apakah terdapat session nama message
                            if($this->session->flashdata('message')){ // Jika ada
                              echo $this->session->flashdata('message'); // Tampilkan pesannya
                            }
                            ?>
                          </div>
                          <form method="POST" action="<?php echo site_url('C_Login/cek_login')?>">
                                <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                                  <div class="form-group has-feedback">
                                      <input type="text" class="form-control" name="username" placeholder="username"  autocomplete="off">
                                  </div>
                                  <div class="form-group has-feedback">
                                      <input type="password" class="form-control" name="password" placeholder="password" autocomplete="off">
                                  </div>
                                  <div class="" margin-left="auto" margin-right="auto">
                                    <button type="submit" class="btn btn-primary btn-block btn-flat"><h5>Sign Up</h5></button>
                                  </div>
                                </div>
                              </form>
                              <div class="copy_right_text text-center">
                                  <p>Belum punya akun ? <a href="<?php echo site_url('C_Login/registrasi')?>" >Sign Up</a></p>
                              </div>
                          <!-- /.login-box-body -->
                      </div>
                </div>
            </div>
        </div>
      </div>


    <!-- ****** Footer Menu Area Start ****** -->
       <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copy_right_text text-center">
                        <p>Copyright @2018 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ****** Footer Menu Area End ****** -->

    <!-- Jquery-2.2.4 js -->
    <script src="<?php echo base_url() ?>assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="<?php echo base_url() ?>assets/js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="<?php echo base_url() ?>assets/js/active.js"></script>
</body>
</html>