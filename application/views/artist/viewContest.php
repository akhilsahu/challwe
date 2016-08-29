<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<div id="wrapper">


<!-- Header
================================================== -->
<div class="clearfix"></div>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style="background: url(<?php echo base_url();?>assets/images/job-page-photo.jpg)">
	<div class="container">
		<div class="ten columns">
			<span><a href="browse-jobs.html">Show Contest</a></span>
			<h2><?php echo $list[0]['txt_contest_name']; ?></h2>
		</div>

		<div class="six columns">
		<?php if($list[0]['int_status'] != 1){ ?>
			<a href="#"  onclick="javascript:
					if(confirm('Are you sure? You want to participate in contest?')){
						setparticipate('<?php echo $list[0]["int_contest_id"]?>','<?php echo $list[0]['int_created_by'] ?>');
					}" class="button white"></i>Participate</a>
		<?php }else{ ?>
			<a href="#" class="button white"><?php echo "Participated"; ?></a>
			<?php } ?>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<?php 
		$s_date=date_create($val['dt_start_date']);
		$c_date=date_create($val['dt_last_date']);

	?>
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		
		<!-- Company Info -->
		<div class="company-info">
			<div class="content">
				<h4><?php echo $list[0]['txt_contest_name']; ?></h4>
				
			</div>
			<div class="clearfix"></div>
		</div>

		<p class="margin-reset">
			<div><?php echo $list[0]['txt_contest_description']; ?></div>
		</p>

		
	</div>
	<br>
	<div class="col-sm-14 col-md-14 col-lg-14">

                    <div class="title-box">

                      <form method="POST" action="<?php echo site_url()?>/artist/updateArtistdetails" enctype="multipart/form-data" >  
                      <input type="hidden" id="hid_int_artist_id" name="hid_int_artist_id" value="<?php echo $user_details['int_artist_id']; ?>" />

                        <div id="tabs">

                          <ul>

                            <li><a href="#tabs-1">Paritcipated</a></li>

                            <li><a href="#tabs-2">Non Paritcipated</a></li>

                            <li><a href="#tabs-3">view</a></li>

                          </ul>

                          <div id="tabs-1">

                              <table class="manage-table resumes responsive-table">
								<tr>
									<th><i class="fa fa-file-text"></i> Title</th>
									<th><i class="fa fa-calendar"></i> Start Date</th>
									<th><i class="fa fa-calendar"></i> Date Closed</th>
									<th><i class="fa fa-tags"></i> Skills</th>
									<th><i class="fa fa-map-marker"></i> Price</th>
									<th></th>
								</tr>  
								<?php 

									foreach($participated as $val){

										if($val['int_status'] == 1 ){
										$s_date=date_create($val['dt_start_date']);
										$c_date=date_create($val['dt_last_date']);
										?>
									<tr>
										<td class="alert-name"><?php echo $val['txt_contest_name'];?></td>
										<td><?php echo date_format($s_date,"F j, Y");?></td>
										<td><?php echo date_format($c_date,"F j, Y");?></td>
										<td class="keywords"><?php echo $val['skills'];?></td>
										<td>$ <?php echo $val['txt_budget'];?></td>
										<td class="action">
											
										</td>
									</tr>
									<?php }
								}?>                             

                                  
                            </table>
                                

                          </div>

                          <div id="tabs-2">
	                          	<table class="manage-table resumes responsive-table">
									<tr>
										<th><i class="fa fa-file-text"></i> Title</th>
										<th><i class="fa fa-calendar"></i> Start Date</th>
										<th><i class="fa fa-calendar"></i> Date Closed</th>
										<th><i class="fa fa-tags"></i> Skills</th>
										<th><i class="fa fa-map-marker"></i> Price</th>
										<th></th>
									</tr> 
									<?php 

									foreach($participated as $val){

										if($val['int_status'] != 1 ){
										$s_date=date_create($val['dt_start_date']);
										$c_date=date_create($val['dt_last_date']);
										?>
									<tr>
										<td class="alert-name"><?php echo $val['txt_contest_name'];?></td>
										<td><?php echo date_format($s_date,"F j, Y");?></td>
										<td><?php echo date_format($c_date,"F j, Y");?></td>
										<td class="keywords"><?php echo $val['skills'];?></td>
										<td>$ <?php echo $val['txt_budget'];?></td>
										<td class="action">
											
										</td>
									</tr>
									<?php }
								}?>                                  

	                                  
	                            </table>
                          </div>

                          <div id="tabs-3">

                          	  <table class="manage-table resumes responsive-table">
								<tr>
									<th><i class="fa fa-file-text"></i> Title</th>
									<th><i class="fa fa-calendar"></i> Start Date</th>
									<th><i class="fa fa-calendar"></i> Date Closed</th>
									<th><i class="fa fa-tags"></i> Skills</th>
									<th><i class="fa fa-map-marker"></i> Price</th>
									<th></th>
								</tr>                               

                                  
                            </table>

                          </div>

                        </div>

                      </form>  



                    </div>

                </div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Overview</h4>

			<div class="job-overview">
				
				<ul>
					
					<li>
						<i class="fa fa-file-text"></i>
						<div>
							<strong>Title:</strong>
							<span><?php echo $list[0]['txt_contest_name']; ?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-calendar"></i>
						<div>
							<strong>Date:</strong>
							<span><?php echo date_format($s_date,"F j, Y")." to ".date_format($c_date,"F j, Y");?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-money"></i>
						<div>
							<strong>Price:</strong>
							<span>$<?php echo $list[0]['txt_budget']; ?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-tags"></i>
						<div>
							<strong>Skills:</strong>
							<span><?php echo $getskill[0]['skill_name']; ?></span>
						</div>
					</li>
				</ul>

			</div>

		</div>

	</div>
	<!-- Widgets / End -->


</div>


<!-- Footer
================================================== -->
<div class="margin-top-50"></div>



<!-- Back To Top Button -->
<div id="backtotop" style="display: none;"><a href="#"></a></div>

</div>
<script type="text/javascript">
	function setparticipate(id,name){
	$.ajax({
			type: "POST",
			url: "<?php echo site_url(); ?>/artist/updateparticipate",
			data: { 'id' : id  , 'artist_id' : name } ,
			cache: false,
			success: function(data) {
				window.location='<?php echo site_url(); ?>/content/listcontest/';
			}
	});
}
</script>
<style>

.sidebar .widget, .widget {

    margin-bottom: 35px;

}

#sidebar h3 {

    padding-top: 7px;

}

.sidebar-nav li {

    padding: 10px;

    background-color: #fafafa;

    width: 100%;

    margin-bottom: 5px;

    color: #000;

}

ul, li, ol {

    line-height: 24px;

    margin: 0;

}

#search-form form, ul.post-meta, .sidebar ul, ul.tabs, .testimonials ul, ul.why, .panel-heading h3, .features .panel-heading h4, #options ul, .gallery ul {

    margin: 0;

}

.widget ul {

    list-style: none;

    padding: 0;

}

ul, li, ol {

    line-height: 24px;

    margin: 0;

}

.sidebar-nav li a {

    color: #000;

    width: 100%;

}

nav li.active, .sidebar-nav li:hover, .btn.btn-shopping-cart .fa {

    background-color: #59ab02;

}

.sidebar-nav li.active {

    padding: 10px;

    width: 100%;

    margin-bottom: 5px;

    color: #ffffff !important;

}

h2.title {

    font-size: 26px;

    line-height: 40px;

    margin: 20px 0;

    color: #fff;

}

.margin-bottom60 {

    margin-bottom: 60px;

}

.margin-top60 {

    margin-top: 60px;

}

@media (min-width: 768px)

.container {

    width: 750px;

}

.pricing_plan h3, .pricing_plan.special h3, .sidebar-nav li.active, .sidebar-nav li:hover, .btn.btn-shopping-cart .fa {

    background-color: #59ab02;

}



.sidebar-nav li.active {

    padding: 10px;

    width: 100%;

    margin-bottom: 5px;

    color: #ffffff !important;

}

.pattern-overlay {

    background-color: rgba(89, 171, 2, 0.75);

}



.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {

    border: 1px solid rgba(89, 171, 2, 0.75);;

    background: rgba(89, 171, 2, 0.75);

    color: #ffffff;

}

.form-group{

      margin-top: 10px;

}



</style>
<script type="text/javascript">
	 $(document).ready(function(){
	 	$( "#tabs" ).tabs();
	 });

</script>