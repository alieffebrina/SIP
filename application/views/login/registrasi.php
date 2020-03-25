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
    <script type="text/javascript">
      window.onfocus = refreshParent;
        function refreshParent() {
            document.getElementById("password").value = "";
            document.getElementById("username").value = "";
        }
        function Angkasaja(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
          if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
          return true;
          }
    </script>
</head>

<body onfocus="refreshParent">
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>
    <footer class="footer_area">
      <div class="container">
        <div class="footer-logo-area text-center">
            <a href="index.html" class="yummy-logo">SIP</a>
        </div>
            <h2 class="contact-form-title text-center">Silahkan registrasi di sini !</h2>
            <!-- Contact Info Area Start -->
            <?php echo form_open("Gambar/tambah", array('enctype'=>'multipart/form-data')); ?>
              <div class="contact-form-area">
                  <div class="row">
                      <div class="col-12 col-md-12 item">
                          <div class="single-contact-info mb-30 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Name" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" required="" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="Password" class="form-control" name="password" placeholder="Password"  autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="tgl_lahir" placeholder="tanggal lahir" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tlf" placeholder="No Telfon" autocomplete="off" onkeypress="return Angkasaja(event)" maxlength="12" minlength="7">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="wa" placeholder="No WA"autocomplete="off" onkeypress="return Angkasaja(event)" maxlength="12">
                            </div>
                            <div class="form-group">
                                <h6 align="left">Upload Foto : <input type="file" class="form-control" name="input_gambar" placeholder="upload foto"></h6>
                            </div>
                           <!--  <div class="form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div> -->
                          </div>
                      </div>
                  </div>
              </div>
              <div class="contact-info-area">
                  <div class="row">
                      <!-- Single Contact Info -->
                      <div class="col-12 col-md-6">
                          <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s">
                               <h4>Alamat KTP</h4>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="alamat" placeholder="Alamat"autocomplete="off">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control"name="rt" autocomplete="off"placeholder="RT" onkeypress="return Angkasaja(event)" maxlength="2" >
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="rw" autocomplete="off"placeholder="RW" onkeypress="return Angkasaja(event)" maxlength="2" >
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="kel"autocomplete="off"placeholder="Kelurahan">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="kec" autocomplete="off"placeholder="Kecamatan">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="kota" autocomplete="off"placeholder="Kota">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control"name="prov" autocomplete="off"placeholder="Provinsi">
                              </div>
                          </div>
                      </div>
                      <!-- Single Contact Info -->
                      <div class="col-12 col-md-6">
                          <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s">
                               <h4>Alamat Domisili</h4>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="alamat_dom"autocomplete="off"placeholder="Alamat">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="rt_dom" autocomplete="off"placeholder="RT" onkeypress="return Angkasaja(event)" maxlength="2" >
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="rw_dom" autocomplete="off"placeholder="RW" onkeypress="return Angkasaja(event)" maxlength="2" >
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="kel_dom" autocomplete="off"placeholder="Kelurahan">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="kec_dom" autocomplete="off" placeholder="Kecamatan">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="kota_dom" autocomplete="off"placeholder="Kota">
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control" name="prov_dom" autocomplete="off"placeholder="Provinsi">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="form-group">
              <input type="checkbox" name="infaq" value="1" onclick="check()" id="infaq" /> Saya bersedia membayar infaq Rp. 15.000,- perbulan
              <button type="submit" name="submit" id="submit" class="btn contact-btn" value="ok" disabled>Sign Up</button>
            </div>
            <?php echo form_close(); ?>
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
    <script type="text/javascript">
      function check(){
        var cb = document.getElementById("submit");
        
        if(document.getElementById("infaq").checked == true){
          cb.disabled = false;
        }else{
          cb.disabled = true;
        }
        
      }
    </script>
</body>
</html>