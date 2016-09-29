<div class="video-content margin-top-90">
    <div class="container">
        <div class="col-sm-12 margin-bottom-20">
            <ul class="layout-row align-center">
                <li style='max-width: 100px;'>
                    <a href="<?php echo site_url() . "/content/viewProfile/" . $post_detail['int_artist_id'] ?>">
                        <img src="<?php echo ($post_detail['txt_profile_image']) ? base_url() . $post_detail['txt_profile_image'] : base_url() . 'assets/images/avatar-placeholder.png'; ?>" alt="profile picture" class="img-responsive img-circle" />
                    </a>	
                </li>
                <li class="layout-column justify-center mr-l-25">
                    <h3 class='text-uppercase' style='color: #fff;'>
                        <a href="<?php echo site_url() . "/content/viewProfile/" . $post_detail['int_artist_id'] ?>">
                            <?php echo $post_detail['txt_fname'] . " " . $post_detail['txt_lname'] ?>
                        </a>	
                    </h3>
                    <ul class="list-inline" style='color: #fff;'>
                        <?php
                        if ($user['int_artist_id'] && $user['int_artist_id'] != $post_detail['int_artist_id']) {
                            if (count($is_follower) > 0) {
                                ?>	
                                <li><a href="<?php echo site_url() . "/artist/unfollow/" . $post_detail['int_artist_id']; ?>"><span class="fa fa-heart">&nbsp;</span>UnFollow</a></li>
                            <?php } else { ?>
                                <li><a href="<?php echo site_url() . "/artist/follow/" . $post_detail['int_artist_id']; ?>"><span class="fa fa-heart">&nbsp;</span>Follow</a></li>
                            <?php } ?>
                            <li><span>|</span></li>
<?php } ?>	
                        <li><span><?php echo $post_detail['follow_count']; ?></span> Followers</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="video-content-start display-full">
            <div class="row">
                <div class="col-sm-12">
                    <div class="current-video-name margin-bottom-15">
                        <!--div class="row margin-bottom-10">
                            <div class="col-sm-2" style="border-right: 1px solid #ccc;">
                                Exorscim
                            </div>
                            <div class='col-sm-8'>
                                <div class='layout-row'>
                                <ul class='list-unstyled' style='margin-right:20px;'>
                                    <li>Description: <a href='#' style='margin-left:20px;'>#Exorsicm</a></li>
                                    <li>Hashtags:<a href='' style='margin-left:20px;'>#Exorsicm</a></li>
                                </ul>
                                <ul class='list-unstyled'>
                                    <li>Tags: <a href='#' style='margin-left:20px;'>Hadi sharif</a></li>
                                    <li>Art/Music:<a href='' style='margin-left:20px;'>Heading here</a></li>
                                </ul>
                                </div>
                            </div>
                        </div-->
                    </div>
                    <div class='video-player'>
                        <div class='row'>
                            <div class='col-sm-12'>
                                <?php if ($post_detail['int_post_type'] == 1) { ?>
                                    <div class=''  style="max-height:500px;overflow: hidden;"><img src="<?php echo base_url() . $post_detail['txt_filepath']; ?>" class='img-responsive display-full' /></div>		
<?php } else if ($post_detail['int_post_type'] == 2) { ?>
                                    <video class='display-full' controls>
                                        <source src="<?php echo base_url() . $post_detail['txt_filepath']; ?>" type="video/mp4">
                                    </video>
<?php } ?>
                                <div class='layout-row justify-space-between'>
                                    <ul class='action-btns list-inline'>
                                        <li><span class='fa fa-thumbs-up fa-lg'>&nbsp;</span></li>
                                        <li><span class='fa fa-thumbs-down fa-lg'>&nbsp;</span></li>
                                        <li><span class='fa fa-forward fa-lg'>&nbsp;</span></li>
                                    </ul>
                                    <ul class='social-btns list-inline'>
                                        <li><span class='fa fa-facebook-f fa-lg'>&nbsp;</span></li>
                                        <li><span class='fa fa-twitter fa-lg'>&nbsp;</span></li>
                                        <li><span class='fa fa-youtube fa-lg'>&nbsp;</span></li>
                                        <li><span class='fa fa-envelope fa-lg'>&nbsp;</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-sm-8'>
                    <div class='comment-section'>
                        <h5 class='text-uppercase'>comment . 4,456</h5>
                        <ul class='list-inline layout-row border-theme' style='border-bottom: 1px solid #eee;padding-bottom: 10px;'>
                            <li style='width: 15%;padding-right: 10px;'></li>
                            <li style='width: 85%;'>
                                <textarea placeholder="Add a Public Comment...." class='display-full'>
                                        &nbsp;
                                </textarea>
                            </li>
                        </ul>
                        <div class="dropdown" style='padding: 10px 0;'>
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Top Comment
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Comment 1</a></li>
                                <li><a href="#">Comment 2</a></li>
                                <li><a href="#">Comment 3</a></li>
                            </ul>
                        </div>
                        <div class="row row-small" style="margin-top: 15px;">
                            <div class="col-sm-1">
                                <img src="<?php echo ($post_detail['txt_profile_image']) ? base_url() . $post_detail['txt_profile_image'] : base_url() . 'assets/images/avatar-placeholder.png'; ?>" alt="profile picture" class="img-responsive" /> 
                            </div>
                            <div class="col-sm-11">
                                <h5>
                                    <a href="<?php echo site_url() . "/content/viewProfile/" . $post_detail['int_artist_id'] ?>">
<?php echo $post_detail['txt_fname'] . " " . $post_detail['txt_lname'] ?>
                                    </a>
                                    <span class="comment-time">1 Month ago</span>
                                </h5>
                                <p class="">
                                    the pink dress, with the sides of the belly
                                </p>
                                <ul>
                                    <li>Reply</li>
                                    <li>
                                        <span class="fa fa-thumbs-up">&nbsp;</span>
                                        <span class="fa fa-thumbs-down">&nbsp;</span>
                                    </li>
                                </ul>
                                <a href="#">View all 6 replies&nbsp;<span class="fa fa-arrow-down">&nbsp;</span></a>
                                <div class="row row-small" style="margin-top: 15px;">
                                    <div class="col-sm-1">
                                        <img src="<?php echo ($post_detail['txt_profile_image']) ? base_url() . $post_detail['txt_profile_image'] : base_url() . 'assets/images/avatar-placeholder.png'; ?>" alt="profile picture" class="img-responsive" /> 
                                    </div>
                                    <div class="col-sm-11">
                                        <h5>
                                            <a href="<?php echo site_url() . "/content/viewProfile/" . $post_detail['int_artist_id'] ?>">
<?php echo $post_detail['txt_fname'] . " " . $post_detail['txt_lname'] ?>
                                            </a>
                                            <span class="comment-time">1 Month ago</span>
                                        </h5>
                                        <p class="">
                                            the pink dress, with the sides of the belly
                                        </p>
                                        <ul>
                                            <li>Reply</li>
                                            <li>
                                                <span class="fa fa-thumbs-up">&nbsp;</span>
                                                <span class="fa fa-thumbs-down">&nbsp;</span>
                                            </li>
                                        </ul>
                                        <a href="#">View all 6 replies&nbsp;<span class="fa fa-arrow-down">&nbsp;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-small" style="margin-top: 15px;">
                            <div class="col-sm-1">
                                <img src="<?php echo ($post_detail['txt_profile_image']) ? base_url() . $post_detail['txt_profile_image'] : base_url() . 'assets/images/avatar-placeholder.png'; ?>" alt="profile picture" class="img-responsive" /> 
                            </div>
                            <div class="col-sm-11">
                                <h5>
                                    <a href="<?php echo site_url() . "/content/viewProfile/" . $post_detail['int_artist_id'] ?>">
<?php echo $post_detail['txt_fname'] . " " . $post_detail['txt_lname'] ?>
                                    </a>
                                    <span class="comment-time">1 Month ago</span>
                                </h5>
                                <p class="">
                                    the pink dress, with the sides of the belly
                                </p>
                                <ul>
                                    <li>Reply</li>
                                    <li>
                                        <span class="fa fa-thumbs-up">&nbsp;</span>
                                        <span class="fa fa-thumbs-down">&nbsp;</span>
                                    </li>
                                </ul>
                                <a href="#">View all 6 replies&nbsp;<span class="fa fa-arrow-down">&nbsp;</span></a>
                                <div class="row row-small" style="margin-top: 15px;">
                                    <div class="col-sm-1">
                                        <img src="<?php echo ($post_detail['txt_profile_image']) ? base_url() . $post_detail['txt_profile_image'] : base_url() . 'assets/images/avatar-placeholder.png'; ?>" alt="profile picture" class="img-responsive" /> 
                                    </div>
                                    <div class="col-sm-11">
                                        <h5>
                                            <a href="<?php echo site_url() . "/content/viewProfile/" . $post_detail['int_artist_id'] ?>">
<?php echo $post_detail['txt_fname'] . " " . $post_detail['txt_lname'] ?>
                                            </a>
                                            <span class="comment-time">1 Month ago</span>
                                        </h5>
                                        <p class="">
                                            the pink dress, with the sides of the belly
                                        </p>
                                        <ul>
                                            <li>Reply</li>
                                            <li>
                                                <span class="fa fa-thumbs-up">&nbsp;</span>
                                                <span class="fa fa-thumbs-down">&nbsp;</span>
                                            </li>
                                        </ul>
                                        <a href="#">View all 6 replies&nbsp;<span class="fa fa-arrow-down">&nbsp;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="video-list">
                        <h3 class='text-uppercase margin-bottom-20' style='padding: 5px 25px;'>recently added</h3>
                        <div class="layout-column" style='padding: 5px 25px;'>
                            <?php
                            foreach ($post_list as $val) {
                                if ($val['int_post_id'] == $post_detail['int_post_id'])
                                    continue;
                                ?>
                                <div class="layout-row row align-center">
                                    <div class='col-sm-6'>
                                        <a href="<?php echo site_url() . '/content/postvideos/' . $val['int_post_id'] ?>" style='    max-height: 100px;
                                           overflow: hidden;
                                           display: block;'>
                                            <?php if ($val['int_post_type'] == 1) { ?>
                                                <img src="<?php echo base_url() . $val['txt_filepath']; ?>" class='display-full' >
    <?php } else if ($val['int_post_type'] == 2) { ?>
                                                <video muted autoplay="no" class='display-full'>
                                                    <source src="<?php echo base_url() . $val['txt_filepath']; ?>">
                                                </video>
    <?php } ?>
                                        </a>
                                    </div>
                                    <div class='col-sm-6'>
                                        <div class="layout-column justify-center video-name">
                                            <h5><?php echo $val['txt_title'] ?></h5>
                                            <span><?php echo $val['txt_fname'] . " " . $val['txt_lname'] ?></span>
                                        </div>
                                    </div>
                                </div>
<?php } ?>

                            <!--div class="layout-row row align-center">
    <div class='col-sm-6'>
        <video muted autoplay="no" class='display-full'>
            <source src="<?php echo base_url(); ?>assets/video/magic-cloth.mp4" type="video/mp4">
        </video>
    </div>
    <div class='col-sm-6'>
        <div class="layout-column justify-center video-name">
            <h5>Jones 'Melt'</h5>
            <span>from bulllon</span>
        </div>
    </div>
</div-->

                        </div>
                        <div class='show-more text-center text-capitalize' style='padding: 5px 25px;'><a href='#'>show more</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
    <div class="col-sm-12">
        <h3 class="margin-bottom-10" style="margin-left: 12px;">Related Challenge</h3>
        <div class="row">
<?php for ($i = 0; $i < 5; $i++) { ?>
                <div class="col-sm-2" style="width: 20%;">
                    <div class="show-post">
                        <div class="post-img">
                            <img src="http://i.vimeocdn.com/video/546306488_640.jpg">
                            <div class="post-description">
                                <div class="h5 text-uppercase">life of Rajshahi</div>
                                <ul class="list-inline">
                                    <li><span class="user-profile"><img src="" class="img-responsive img-circle" width="25"></span></li>
                                    <li><span class="">thethirdthought</span></li>
                                    <li><span>|</span></li>
                                    <li><span>244 post</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-controls">
                            <ul class="list-inline">
                                <li><span class="fa fa-thumbs-up">&nbsp;</span>&nbsp;4</li>
                                <li><span class="fa fa-star">&nbsp;</span>&nbsp;2</li>
                                <li><span class="fa fa-eye">&nbsp;</span>&nbsp;10</li>
                                <li class="pull-right"><span class="fa fa-calendar">&nbsp;</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
<?php }; ?>
        </div>
    </div>
    <!--                <div class="col-sm-3">
                        hello
                    </div>-->
</div>
    </div>
</div>

