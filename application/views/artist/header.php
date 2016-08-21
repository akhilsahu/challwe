<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from vasterad.com/themes/workscout/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Aug 2016 12:48:30 GMT -->
<head>
<meta charset="utf-8">
<title>Challwe</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/colors/green.css" id="colors">
<link href="<?php echo base_url();?>assets/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>assets/scripts/jquery-2.1.3.min.js"></script>
<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
    <style>
        .white_content {
            display: none;
            padding: 2px;
            position: fixed;
            left: 16%;
            width: 70%;
            height: auto;
            padding: 2px;
            top:76px;
            border: 16px solid white;
              border-radius: 4px 4px 4px 4px;
            background-color: white;
            z-index:1002;
            /*overflow: auto;*/
            overflow:hidden;
          }
          .black_overlay {
            background-color: black;
            display: none;
            height: 100%;
            left: 0;
            opacity: .85;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1001;
          } 
    </style>

  <body>

  <div id="fade" class="black_overlay" style="display: none; height:1000px;"></div>

  <div id="preloader" class="white_content" style="display:none;left: 42%;width: 12%;top: 50%;">

    <img src="<?php echo base_url();?>uploads/ajax-loader.gif" style="width:100%">

  </div>
  <body>
<div id="wrapper">


<!-- Header
================================================== -->
<header>
<div class="container">
    <div class="sixteen columns">
    
        <!-- Logo -->
        <div id="logo">
            <h1>
                <!-- <a href="index-2.html"><img src="images/logo.png" alt="Work Scout" /></a> -->
                Challwe
            </h1>
        </div>

        <!-- Menu -->
        <nav id="navigation" class="menu">
            <ul id="responsive">

                <!-- <li><a href="index-2.html" id="current">Home</a>
                    <ul>
                        <li><a href="<?php echo site_url();?>/content/home">Home</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="<?php echo site_url()?>/content/bloglist">Blog</a></li>
                        <li><a href="#">About Challwe</a></li>                        
                    </ul>
                </li> -->
                <li><a href="<?php echo site_url();?>/content/home" id="current">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="<?php echo site_url()?>/content/bloglist">Blog</a></li>
                <li><a href="#">About Challwe</a></li>
            </ul>


            <ul class="float-right">
                <?php if($user['logged_in']){
                    ?>  
                    <li><a href="javascript:void(0)"> Hi <?php echo $user['txt_fname']?></a></li>
                    <li><a href="<?php echo site_url()?>/artist/dashboard"> My Account</a></li>    
                    <?php 
                    if($user['login_type']=='web'){?>
                        <li><a href="<?php echo site_url()?>/user/signoutArt"><i class="fa fa-unlock"></i> Signout</a></li>
                    <?php }else{?>
                        <li><a href="<?php echo site_url()?>/user/facebooklogout"><i class="fa fa-unlock"></i> Signout</a></li>    
                <?php } 
                }else{?>                
                    <li><a href="<?php echo site_url()?>/user/login"><i class="fa fa-lock"></i> Login</a></li>
                    <li><a href="<?php echo site_url()?>/user/login/register"><i class="fa fa-user"></i> Sign Up</a></li>
                    <li><a href="<?php echo site_url()?>/user/adminlogin"><i class="fa fa-user"></i> Admin Login</a></li>
                <?php }?>
            </ul>

        </nav>

        <!-- Navigation -->
        <div id="mobile-navigation">
            <a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
        </div>

    </div>
</div>
</header>
<div class="clearfix"></div>