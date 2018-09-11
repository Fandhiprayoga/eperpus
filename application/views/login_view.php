<!DOCTYPE html>
<html lang="en">
<head>
  <title>.: E-PERPUSTAKAAN :.</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>asset/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/main.css">
<!--===============================================================================================-->
</head>
          <?php 
              $q_instansi = $this->db->query("SELECT * FROM tb_instansi LIMIT 1")->row();
          ?>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('<?php echo base_url(); ?>asset/images/bg-02.jpg');">
      <div class="wrap-login100">
        <form action="<?php echo base_URL(); ?>index.php/login/cek_login" method="post" class="login100-form validate-form">
        <?php echo $this->session->flashdata("k"); ?>
          <span class="login100-form-logo">
            <img src="<?php echo base_url(); ?>upload/<?php echo $q_instansi->logo; ?>" class="login100-form-logo">
          </span>

          

          <div style="width: 400px; margin: 0 auto">
            <div class="login100-form-title p-b-34 p-t-27">
              <h3 style="margin: 5px 0 0.4em 0; font-size: 21px; color: #000; font-weight: bold"><?php echo $q_instansi->nama; ?></h3>
              <div style="color: #000; font-size: 13px" class="clearfix"><?php echo $q_instansi->alamat; ?></div>
             </div>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="username" placeholder="Username">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="pass" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              Login
            </button>
          </div>
          <div class="text-center p-t-90">
              Versi 1.0 ©Fajar Mahardika
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>asset/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>asset/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url(); ?>asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>asset/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>asset/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>asset/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url(); ?>asset/js/main.js"></script>

</body>
</html>