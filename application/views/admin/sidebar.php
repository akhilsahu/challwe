<?php



$user=$this->session->userdata('user');



?><!-- BEGIN SIDEBAR-->
	<div id="sidebar">
		<div class="sidebar-back"></div>
		<div class="sidebar-content">
			<div class="nav-brand">
				<a class="main-brand" href="#">
					<h3 class="text-light text-white"><span>Chall<strong>We</strong> </span><i class="fa fa-rocket fa-fw"></i></h3>
				</a>
			</div>
			


<!-- BEGIN MENU SEARCH -->
<form class="sidebar-search" role="search">
	<a href="javascript:void(0);"><i class="fa fa-search fa-fw search-icon"></i><i class="fa fa-angle-left fa-fw close-icon"></i></a>
	<div class="form-group">
		<div class="input-group">
			<input type="text" class="form-control navbar-input" placeholder="Search...">
			<span class="input-group-btn">
				<button class="btn btn-equal" type="button"><i class="fa fa-search"></i></button>
			</span>
		</div>
	</div>
</form>
<!-- END MENU SEARCH -->

<!-- BEGIN MAIN MENU -->
<ul class="main-menu">
	<!-- Menu Dashboard -->
	<li>
		<a href="<?php echo site_url();?>/user/dashboard" class="active">
			<i class="fa fa-home fa-fw"></i><span class="title">Dashboard</span>
		</a>
	</li><!--end /menu-item -->
	<!-- Menu UI -->
	<li>
		<a href="javascript:void(0);">
			<i class="fa fa-puzzle-piece fa-fw"></i><span class="title">Member</span> <span class="expand-sign">+</span>
		</a>
		<!--start submenu -->
		<ul>
			<li><a href="<?php echo site_url();?>/admin/addArtist">Add</a></li>
			<li><a href="<?php echo site_url();?>/admin/manageArtist">Manage</a></li>
		</ul>
	</li>
	<li>
		<a href="javascript:void(0);">
			<i class="fa fa-puzzle-piece fa-fw"></i><span class="title">Blog</span> <span class="expand-sign">+</span>
		</a>
		<!--start submenu -->
		<ul>
			<li><a href="<?php echo site_url();?>/admin/addBlog">Add</a></li>
			<li><a href="<?php echo site_url();?>/admin/manageBlog">Manage</a></li>
		</ul>
	</li>
	<li>
		<a href="javascript:void(0);">
			<i class="fa fa-puzzle-piece fa-fw"></i><span class="title">Skills</span> <span class="expand-sign">+</span>
		</a>
		<!--start submenu -->
		<ul>
			<li><a href="<?php echo site_url()."/admin/addDirectory";?>">Add</a></li>
			<li><a href="<?php echo site_url()."/admin/manageDirectory";?>">Manage</a></li>
		</ul>
	</li>
	<li>
		<a href="javascript:void(0);">
			<i class="fa fa-puzzle-piece fa-fw"></i><span class="title">Items</span> <span class="expand-sign">+</span>
		</a>
		<!--start submenu -->
		<ul>
			<li><a href="<?php echo site_url()."/admin/additems";?>">Add</a></li>
			<li><a href="<?php echo site_url()."/admin/manageditems";?>">Manage</a></li>
		</ul>
	</li>
	<li>
		<a href="javascript:void(0);">
			<i class="fa fa-puzzle-piece fa-fw"></i><span class="title">Levels</span> <span class="expand-sign">+</span>
		</a>
		<!--start submenu -->
		<ul>
			<li><a href="<?php echo site_url()."/admin/addlevels";?>">Add</a></li>
			<li><a href="<?php echo site_url()."/admin/managedlevels";?>">Manage</a></li>
		</ul>
	</li>
	<li>
		<a href="javascript:void(0);">
			<i class="fa fa-puzzle-piece fa-fw"></i><span class="title">Category</span> <span class="expand-sign">+</span>
		</a>
		<!--start submenu -->
		<ul>
			<li><a href="<?php echo site_url()."/admin/addcategory";?>">Add</a></li>
			<li><a href="<?php echo site_url()."/admin/managecategory";?>">Manage</a></li>
		</ul>
	</li>
	<li>
		<a href="<?php echo site_url()."/admin/manageIcons";?>">
			<i class="fa fa-home fa-fw"></i><span class="title">Icon List</span>
		</a>
	</li>
	<li>
		<a href="<?php echo site_url()."/admin/manageTransactions";?>">
			<i class="fa fa-home fa-fw"></i><span class="title">Transaction History</span>
		</a>
	</li>
	<li>
		<a href="<?php echo site_url()."/admin/manageSettings";?>">
			<i class="fa fa-home fa-fw"></i><span class="title">Settings</span>
		</a>
	</li>
</ul><!--end .main-menu -->
<!-- END MAIN MENU -->
		</div>
	</div><!--end #sidebar-->