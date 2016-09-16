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
    /*
    .pattern-overlay {
    
        background-color: rgba(89, 171, 2, 0.75);
    
    }*/
    header{
        background-color: #333; 
    }
    .blur-bg{
        width: 100%;
        height: 200px;
        position: relative;
    }
    .blur-bg:before {
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgba(0,0,0,0.4);
        content: "";
        width: 100%;
        height: 100%;
    }
    .personal-detail, .challwe-profile{
        background: #f2f2f2;
    }
    .user-small-profile{
        width: 25px;
        display: inline-block;
        vertical-align: top;
        margin-right: 10px;
    }

</style>



<section id="main">

    <!-- Main Content -->
	
	<br><br><br>
	

    <div class="content margin-top60 margin-bottom60">

        <div class="container">

            <div clasjFiler-items jFiler-rows="row">

                <!-- Left Section -->

                <div class="col-sm-9 col-md-9 col-lg-9">
                    <div class="btn-block text-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#create-album">Edit Album</button>
                    </div>
					
			
					<hr>
					
                    <h4>Photo</h4>
					<div class="row">
					<?php foreach($media_details as $val){?>
						<div class="col-sm-4">
							<div class="show-post">
								<div class="post-img">
									<img src="<?php echo base_url().$val['txt_path']?>">
									<div class="post-description">
										<!--ul class="list-inline">
											<li><a href="#">Exorsicm</a></li>
											<li class="pull-right"><a href="#">By&nbsp;&nbsp;<span>hadia khoury</span></a></li>
										</ul-->
										<div class="title"></div>
									</div>
								</div>
								<div class="post-controls">
									<ul class="list-inline">
										<li><span class="fa fa-thumbs-up">&nbsp;</span>&nbsp;4</li>
										<li><span class="fa fa-star">&nbsp;</span>&nbsp;2</li>
										<li><span class="fa fa-eye">&nbsp;</span>&nbsp;10</li>
										<li class="pull-right"><span id="btn_media_<?php echo $val['int_media_id']?>" class="fa fa-trash del_photo_btn">&nbsp;</span></li>
									</ul>
								</div>
							</div>
						</div>
					<?php }?>
					</div>





                </div>

                <!-- /Left Section -->


            </div>

        </div>

    </div>

    <!-- /Main Content -->

</section>

<!--modal-->
<div id="create-album" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 65%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header btn-success">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $album_details['txt_name'];?></h4>
      </div>
	  <form method="POST" action="<?php echo site_url()."/artist/editAlbum"?>">
      <div class="modal-body">
          <input type="hidden" class="form-control" name="int_album_id" id="int_album_id" value="<?php echo $album_details['int_album_id'];?>" />
          <div class="margin-top60 btn-block">
              <ul class="list-inline">			  
			  <?php foreach($media_details as $val){?>
                  <li style="display: inline-flex;">
                      <input type="checkbox" style="margin-right: 10px;" checked class="check-album" name="int_media_id[]" value="<?php echo $val['int_media_id'];?>" />
                      <img style="max-width:170px;max-height:150px;" src="<?php echo base_url().$val['txt_path'];?>" />
                  </li>                  
			  <?php } ?>
              </ul>
          </div>
		  <br>
		  <hr>
		  <div class="margin-top60 btn-block">
              <ul class="list-inline">			  
			  <?php foreach($no_album_media_details as $val){?>
                  <li style="display: inline-flex;">
                      <input type="checkbox" style="margin-right: 10px;" class="check-album" name="int_media_id[]" value="<?php echo $val['int_media_id'];?>" />
                      <img style="max-width:170px;max-height:150px;" src="<?php echo base_url().$val['txt_path'];?>" />
                  </li>                  
			  <?php } ?>
              </ul>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="btn_create_album" value="Update">
      </div>
	  </form>
    </div>

  </div>
</div>
<!--end modal-->

<script>

    $(document).ready(function(){

        $(".del_photo_btn").click(function(){
            var id=this.id.split("_");
            $("#fade").show();
            $("#preloader").show();
            $.ajax({
                type: "POST",
                url: '<?php echo site_url();?>/artist/removeArtistMedia',
                datatype: "json",
                data: {'id':id[2]},
                crossDomain: true,
                success: function(result) {
                    $("#btn_media_"+id[2]).parent().parent().parent().parent().parent().remove();
                    $("#fade").hide();
                    $("#preloader").hide();
                },
                error: function(result) {
                    $("#fade").hide();
                    $("#preloader").hide();
                }
            });
        });
		
		
    });

</script>