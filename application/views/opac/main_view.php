<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPAC EPERPUS</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap_opac_main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style_opac_main.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>asset/css/lightslider.css" />                  
</head>

<body>
    <div style="height:100%;">
        <div class="header-blue" style="background-color:rgba(0,0,0,0.1);background-image:url(&quot;<?php echo base_url(); ?>asset/images/2.jpg&quot;);min-height:624px;height:100%;">
            <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search fixed-top">
                <div class="container">
                    <img src="<?php echo base_url(); ?>upload/logo2.png" alt="logo" height="84" width="84" style="margin-right:15px;">  
                    <a class="navbar-brand" href="<?php echo base_url();?>">SMK NEGERI 1 KAWUNGANTEN </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url();?>index.php/opac/info">Info Perpustakaan</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url();?>index.php/opac/librarian">Pustakawan</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url();?>index.php/opac/help">Bantuan Pencarian</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url();?>index.php/opac/req">Permintaan Buku</a></li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"></label></div>
                        </form><span class="navbar-text"> </span><a class="btn btn-light action-button" role="button" href="<?php base_url(); ?>index.php/login" style="background-color:rgba(0,0,0,0.1);color:#ffffff; border-color:white;">Log In</a></div>
        </div>
        </nav>
    </div>
    </div>
    <!------------------------------->
        <?php $this->load->view('opac/'.$page);?>
    <!------------------------------->
    <!----------------------->
    <div align="center">
                <p style="font-color:rgb(49,52,55);background-color:rgba(255,255,255,0.3);height:28px;">Versi 1.0 ©Fajar Mahardika </p>
    </div>
    <!----------------------->
    </body>
</html>
    <script src="<?php echo base_url(); ?>asset/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo  base_url(); ?>asset/js/lightslider.js"></script>
    <script>
        $(document).ready(function() {
            $("#lightSlider").lightSlider({  
                item:5,      
                speed: 400, //ms'
                auto: true,
                loop: true,
                slideEndAnimation: true,
                pause: 3000,
                slideMargin:10,
                autoWidth:true,
                pager:false,
            }); 
        });

        $(document).on('click', '#btncari', function(){ 
            // Your Code
            window.location.href = "<?php echo base_url();?>index.php/opac/cari";
        });
    </script>
