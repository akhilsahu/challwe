<link href="<?php echo base_url();?>plugins/jQuery.filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />

<link href="<?php echo base_url();?>plugins/jQuery.filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="<?php echo base_url();?>plugins/jQuery.filer/js/jquery.filer.min.js?v=1.0.5"></script>

<script type="text/javascript" src="<?php echo base_url();?>plugins/jQuery.filer/js/custom.js?v=1.0.5"></script>

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



</style>
<div id="wrapper">


<!-- Header
================================================== -->
<div class="clearfix"></div>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style="background: url(<?php echo base_url();?>assets/images/job-page-photo.jpg)">
	<div class="container">
		<div class="ten columns">
			<span><a href="browse-jobs.html">Show Challenge</a></span>
			<h2><?php echo $list[0]['txt_contest_name']; ?></h2>
		</div>

		<div class="six columns">
	<?php 
	if($user['int_artist_id']){	
		if($userContestStatus[0]['int_status'] == 1){ ?>
			<a href="javascript:void(0);" class="button white" data-toggle="modal" data-target="#submit-challenge"><?php echo "Submit Solution"; ?></a>
		<?php }else if($userContestStatus[0]['int_status']==''){ ?>			
			<a href="#"  onclick="javascript:
					if(confirm('Are you sure? You want to participate in contest?')){
						setparticipate('<?php echo $list[0]["int_contest_id"]?>','<?php echo $list[0]['int_created_by'] ?>');
					}" class="button white"></i>Participate</a>
		<?php } 
	}?>
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
	<h2 style="    border-bottom: 1px solid #e0e0e0;">Attachments</h2>
	<br>
	<div class="col-sm-9 col-md-9 col-lg-9">                  
                    <div class="jFiler-items jFiler-row">
                        <ul class="jFiler-items-list jFiler-items-grid">
                            <?php 
							$i=1;
							$media_details=json_decode($list[0]['txt_attachements']);
							foreach($media_details as $val){
								$ext=explode(".",$val);
								$url='';
								if($ext[count($ext)-1]=='pdf') $url=base_url()."uploads/pdf_icon.jpg";
								else if($ext[count($ext)-1]=='xls') $url=base_url()."uploads/excell_icon.jpg";
								else if($ext[count($ext)-1]=='docx' || $ext[0]=='doc') $url=base_url()."uploads/word_icon.jpg";
								else $url=base_url().$val;
								?>
                            <li class="jFiler-item" data-jfiler-index="1" style="">                        
                                <div class="jFiler-item-container">                            
                                <div class="jFiler-item-inner">                                
                                <div class="jFiler-item-thumb">                                    
                                <div class="jFiler-item-status"></div>                                    
                                <div class="jFiler-item-info">                                        
                                <!-- <span class="jFiler-item-title"><b title="city_1 (1).jpg">city_1 (1).jpg</b></span>                                                                         -->
                                </div>                                    
                                <div class="jFiler-item-thumb-image">
									<a href="<?php echo site_url()."/content/contest_download/".$list[0]['int_contest_id']."/".$i++;?>">
										<img src="<?php echo $url;?>" draggable="false"></div>                                
									</a>
								</div>                                                       
                                </div>                        
                                </div>                    
                            </li>
                            <?php } ?>

                        </ul>

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



<!--modal-->
<div id="submit-challenge" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header btn-success">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Submit Challenge</h4>
      </div>
      <div class="modal-body">
          <!-- Login -->
      <div class="tab-content">

        <!--h3 class="margin-bottom-10 margin-top-10">Login</h3-->

        <form method="post" class="login" action="<?php echo site_url()?>/artist/submitContest" enctype="multipart/form-data">

          
          <p class="form-row form-row-wide">
            <label for="username">Description:</label>
            <textarea class="input-text" name="txt_description" id="txt_description" value="" required ></textarea>
          </p>

          <p class="form-row form-row-wide">
            <label for="password">Attachment:</label>
            <label class="upload-btn">
				<input type="file" multiple name="image_file[]" id="image_file" />
				<i class="fa fa-upload"></i> Browse
			</label>
			<span class="fake-input">No file selected</span>
          </p>

          <p class="form-row">
            <input type="submit" class="button" name="login" value="Submit" />
          </p>
          
        </form>
      </div>
      </div>
      <!--div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Create</button>
      </div-->
    </div>
  </div>
</div>
<!--end modal-->


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