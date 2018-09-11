<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPAC EPERPUS</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap_opac_main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bower_components/font-awesome/css/font-awesome.min.css">
    <style>
        .navigation-clean-button .navbar-brand:hover {
            color: #f0f0f0;
        }
    </style>
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background-image:url(&quot;<?php echo base_url(); ?>asset/images/2.jpg&quot;);height:120px;color:#ffffff;">
        <img src="<?php echo base_url(); ?>upload/logo2.png" alt="logo" height="84" width="84" style="">
            <div class="container"><a class="navbar-brand" href="<?php echo base_url();?>" style="color:white;font-weight:bold;">SMK NEGERI 1 KAWUNGANTEN</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url();?>index.php/opac/info" style="color:#ffffff;">Info Perpustakaan</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url();?>index.php/opac/librarian" style="color:#ffffff;">Pustakawan</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url();?>index.php/opac/help" style="color:#ffffff;">Bantuan Pencarian</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="<?php echo base_url();?>index.php/opac/req" style="color:#ffffff;">Permintaan Buku</a></li>
                    </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="<?php echo base_url(); ?>index.php/login" style="background-color:rgba(0,0,0,0.1);color:#ffffff; border-color:white; border-radius:40px;">Log In</a></span></div>
    </div>
    </nav>
    </div>