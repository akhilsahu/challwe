<div class="ts-breadcrumbs breadcrumbs-single-post container">
    <a href="../index.html">Home</a> <i class="icon-right"></i>Challenges List</div>
<section id="main" class="row"><div id="primary" class=""><div id="content" role="main"><div data-parallax="no" data-scroll-btn="no" data-alignment="top"  class="site-section "  style=" background-color: transparent;  color: inherit;  margin-top: 0px;  margin-bottom: 0px;  padding-top: 0px;  padding-bottom: 0px; " ><div class="container"><div class="row"><div style="background-color: transparent;color: inherit;background-position: left;background-attachment: scroll;background-repeat: repeat;background-size: auto;padding-top: 0px;padding-right: 20px;padding-left: 20px;padding-bottom: 0px;text-align: auto;" class="col-lg-12 col-md-12">

                            <div class="row content-block "><div class="col-lg-12">
                                    <div class="block-title block-title-simpleleft">
                                        <div class="block-title-container">
                                            <h1 class="the-title" style="color: #3f4549"><i class="icon-noicon"></i>Challenges List</h1><span class="block-title-description" style="color: #CD1C22">take a challenge and here you go</span>

                                        </div>
                                    </div>
                                </div></div><div class="row content-block "><div style="height: 30px;"></div></div><div class="row content-block "><section class="ts-grid-view cols-by-4 ">
									<?php 
										foreach($list as $val){
											$s_date=date_create($val['dt_start_date']);
											$c_date=date_create($val['dt_last_date']);
									?>
									<div  class="col-lg-3 col-md-3 col-sm-12 item " data-id="1">
                                        <article class=" article-meta-shown title-below-image post-103 video type-video status-publish has-post-thumbnail hentry tag-slimvideo tag-theme tag-top-video-theme tag-touchsize tag-videotheme tag-wordpress-themes videos_categories-music">
                                            <header>
                                                <div class="image-holder">
                                                    <a href="#" title="<?php echo $val['txt_contest_name'];?>"><img src="<?php echo base_url(); ?>assets/images/uploads/sites/28/2015/04/maxresdefault16-450x250.jpg" alt="<?php echo $val['txt_contest_name'];?>" /></a>
                                                    <a class="view-video-play" href="#">
                                                        <i class="icon-play"></i>
                                                    </a>
                                                </div>
                                            </header>
                                            <section>
                                                <div class="entry-section">
                                                    <h3 class="entry-title"><a href="#" title="Olly Murs &#8211; Heart Skips a Beat"><?php echo $val['txt_contest_name'];?></a></h3>
                                                    <div class="entry-excerpt">


                                                        <?php echo $val['txt_contest_description'];?></div>
                                                    <div class="entry-section-footer">
                                                        <div class="entry-author">
                                                            <a class="author-avatar" href="#">
                                                                <img src="http://www.gravatar.com/avatar/07a586c70971fe7d764893201afa4af4?s=40&amp;r=g&amp;d=mm" class="avatar user-1-avatar avatar-40 photo" width="40" height="40" alt="Profile photo of John Doe" />								</a>
                                                            <ul class="entry-meta">
                                                                <li class="entry-author-name">
                                                                    <a href="../members/admin/index.html">
                                                                        John Doe										</a>
                                                                </li>
                                                                <li class="entry-article-date">
                                                                    1 year ago									</li>
                                                                <li class="entry-article-views">
                                                                    5456 views									</li>
                                                            </ul>
                                                        </div>
                                                        <div class="entry-likes"><a href="#" class="touchsize-likes" data-id="touchsize-likes-103" title="Like this"><span class="touchsize-likes-count icon-heart">441</span> <span class="touchsize-likes-postfix"></span></a></div>						</div>
                                                </div>
                                            </section>


                                        </article>
                                    </div>
                                </section></div>
                        </div></div></div></div></div></div></section>
<script type="text/javascript">
	function setparticipate(id){
	$.ajax({
			type: "POST",
			url: "<?php echo site_url(); ?>/artist/updateparticipate",
			data: { 'id' : id  } ,
			cache: false,
			success: function(data) {
				window.location='<?php echo site_url(); ?>/content/listcontest/';
			}
	});
}
</script>