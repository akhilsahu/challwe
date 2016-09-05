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
<!--<link rel="stylesheet" href="<?php //echo base_url();?>assets/css/vine-ember.css" id="colors">-->
<link href="<?php echo base_url();?>assets/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"><link href="<?php echo base_url();?>plugins/select2/select2.min.css" rel="stylesheet" type="text/css">
<script src="<?php echo base_url();?>assets/scripts/jquery-2.1.3.min.js"></script><script src="<?php echo base_url();?>plugins/select2/select2.full.min.js"></script>
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
		  
		  .tooltip {
			  top:-10px;
			  background-color:black;
			  color:white;
			  border-radius:5px;
			  opacity:0;
			  position:absolute;
			  -webkit-transition: opacity 0.5s;
			  -moz-transition:  opacity 0.5s;
			  -ms-transition: opacity 0.5s;
			  -o-transition:  opacity 0.5s;
			  transition:  opacity 0.5s;
			}
			.hover:hover .tooltip {
				opacity:1;
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
        <nav id="navigation" class="menu hello">
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
                <li><a href="<?php echo site_url();?>/content/listcontest">Challenge</a></li>
                <li><a href="<?php echo site_url()?>/content/bloglist">Blog</a></li>
                <li><a href="#">About Challwe</a></li>
            </ul>


            <ul class="float-right">
                <?php if($user['logged_in']){
                    ?>
					<li>
						<a href="<?php echo site_url();?>/wallet/mytransections" class="hover"><?php echo $user['int_challwe_coins'];?> Wallet</a>
						<div class="tooltip">asdadasd</div>
					</li>	
                    <!--<li><a href="javascript:void(0)"> Hi <?php //echo $user['txt_fname']?></a></li>-->
                    <!--<li><a href="<?php echo site_url()?>/artist/dashboard"> My Account</a></li>-->
                    <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo ($user['txt_profile_image'])?base_url().$user['txt_profile_image']:base_url().'assets/images/avatar-placeholder.png'?>" class="user-image img-circle" alt="User Image">
                                <span class="hidden-xs"> Hi <?php echo $user['txt_fname']?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo ($user['txt_profile_image'])?base_url().$user['txt_profile_image']:base_url().'assets/images/avatar-placeholder.png'?>" class="img-circle" alt="User Image" style="max-width: 125px;display: inline-block;">

                                    <p>
                                        <?php echo $user['txt_fname']?>
                                        <!--<small>Member since Nov. 2012</small>-->
                                    </p>
                                </li>
                                <!-- Menu Body -->
<!--                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </div>
                                     /.row 
                                </li>-->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo site_url()?>/artist/dashboard" class="btn btn-default btn-flat">My Account</a>
                                    </div>
                                    <div class="pull-right">
                                        <!--a href="<?php echo site_url()?>/user/signoutArt" class="btn btn-default btn-flat">Sign out</a-->
										<?php if($user['login_type']=='web'){?>
											<a href="<?php echo site_url()?>/user/signoutArt" class="btn btn-default btn-flat">Signout</a>
										<?php }else{?>
											<a href="<?php echo site_url()?>/user/facebooklogout" class="btn btn-default btn-flat">Signout</a>    
										<?php } ?>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    
                <?php }else{?>
					<li><a href="javascript:void(0);"  data-toggle="modal" data-target="#login-user"><i class="fa fa-lock"></i> Login</a></li>
<li><a href="javascript:void(0);"  data-toggle="modal" data-target="#register-user"><i class="fa fa-lock"></i> Sign Up</a></li>					
                    <!--li><a href="<?php echo site_url()?>/user/login"><i class="fa fa-user"></i> Login</a></li>
                    <li><a href="<?php echo site_url()?>/user/login/register"><i class="fa fa-user"></i> Sign Up</a></li>
                    <li><a href="<?php echo site_url()?>/user/adminlogin"><i class="fa fa-user"></i> Admin Login</a></li-->
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