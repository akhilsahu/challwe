<?php$user=$this->session->userdata('user');?><html lang="en"><head>		<title>Challwe - Dashboard</title>				<!-- BEGIN META -->		<meta charset="utf-8">				<meta name="viewport" content="width=device-width, initial-scale=1.0">		<meta name="keywords" content="your,keywords">		<meta name="description" content="Short explanation about this website">		<!-- END META -->		<!-- BEGIN STYLESHEETS -->			<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,600,700,800" rel="stylesheet" type="text/css">			<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css_admin/bootstrap.css">			<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css_admin/boostbox.css">			<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css_admin/boostbox_responsive.css">			<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css_admin/font-awesome.min.css">			<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css_admin/jquery-ui-boostbox.css">		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css_admin/fullcalendar.css">				<script src="<?php echo base_url();?>js_admin/jquery-1.11.0.min.js"></script>		<script src="<?php echo base_url();?>js_admin/jquery-migrate-1.2.1.min.js"></script>		<script src="<?php echo base_url();?>js_admin/jquery-ui-1.10.3.custom.min.js"></script>		<script src="<?php echo base_url();?>js_admin/BootstrapFixed.js"></script>		<script src="<?php echo base_url();?>js_admin/bootstrap.min.js"></script>		<script src="<?php echo base_url();?>js_admin/spin.min.js"></script>		<script src="<?php echo base_url();?>js_admin/moment.min.js"></script>		<script src="<?php echo base_url();?>js_admin/jquery.flot.min.js"></script>		<script src="<?php echo base_url();?>js_admin/jquery.flot.time.min.js"></script>		<script src="<?php echo base_url();?>js_admin/jquery.flot.resize.min.js"></script>		<script src="<?php echo base_url();?>js_admin/jquery.flot.orderBars.js"></script>		<script src="<?php echo base_url();?>js_admin/jquery.flot.pie.js"></script>		<script src="<?php echo base_url();?>js_admin/jquery.knob.js"></script>		<script src="<?php echo base_url();?>js_admin/jquery.sparkline.min.js"></script>		<script src="<?php echo base_url();?>js_admin/jquery.slimscroll.min.js"></script>		<script src="<?php echo base_url();?>js_admin/fullcalendar.min.js"></script>		<script src="<?php echo base_url();?>js_admin/DemoCharts.js"></script>		<script src="<?php echo base_url();?>js_admin/DemoDashboard.js"></script>		<script src="<?php echo base_url();?>js_admin/App.js"></script>		<script src="<?php echo base_url();?>js_admin/Demo.js"></script>		<!-- END STYLESHEETS -->				<style type="text/css"></style>		<style type="text/css">		.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}		</style>	</head>											<body class="body-striped" style="">	<!-- BEGIN HEADER--><header id="header">	<!-- BEGIN NAVBAR --><nav class="navbar navbar-default" role="navigation">	<!-- Brand and toggle get grouped for better mobile display -->	<div class="navbar-header">		<a class="btn btn-transparent btn-equal btn-menu" href="javascript:void(0);"><i class="fa fa-bars fa-lg"></i></a>		<div class="navbar-brand">			<a class="main-brand" href="#">				<h3 class="text-light text-white"><span>Chall<strong>We</strong> </span><i class="fa fa-rocket fa-fw"></i></h3>			</a>		</div><!--end .navbar-brand -->		<a class="btn btn-transparent btn-equal navbar-toggle" data-toggle="collapse" data-target="#header-navbar-collapse"><i class="fa fa-wrench fa-lg"></i></a>	</div>	<!-- Collect the nav links, forms, and other content for toggling -->	<div class="collapse navbar-collapse" id="header-navbar-collapse">		<ul class="nav navbar-nav">			<li><a href="#"><i class="fa fa-home fa-lg"></i></a></li>		</ul><!--end .nav -->		<ul class="nav navbar-nav navbar-right">			<li><span class="navbar-devider"></span></li>			<li class="dropdown">				<a href="javascript:void(0);" class="navbar-profile dropdown-toggle text-bold" data-toggle="dropdown"><?php echo $user['txt_fname']." ".$user['txt_lname'];?> <i class="fa fa-fw fa-angle-down"></i> 				<?php if(isset($user['txt_profile_image']) && $user['txt_profile_image']!=''){ ?>					<img class="img-circle" src="<?php echo base_url()."uploads/".$user['txt_profile_image'];?>" alt="">				<?php }else{?>					<img class="img-circle" src="<?php echo base_url();?>uploads/no-image.png" alt="">				<?php } ?> 				</a>				<ul class="dropdown-menu animation-slide">					<li class="dropdown-header">Config</li>					<li><a href="<?php echo site_url();?>/user/profile">My profile</a></li>					<li class="divider"></li>					<li><a href="<?php echo site_url();?>/user/signout"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>				</ul><!--end .dropdown-menu -->			</li><!--end .dropdown -->		</ul><!--end .nav -->	</div><!--end #header-navbar-collapse --></nav><!-- END NAVBAR --></header><!-- END HEADER--><!-- BEGIN BASE--><div id="base">