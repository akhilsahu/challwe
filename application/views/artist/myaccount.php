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

<section id="main">
    <div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title">Dashboard</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div class="content margin-top60 margin-bottom60">
        <div class="container">
            <div class="row">
                <!-- Left Section -->
                <div class="col-sm-9 col-md-9 col-lg-9">
                    <div class="title-box">
                        <h3>My Dashboard</h3>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 info-box">
                            <h3>Hi <?php echo $user['txt_fname']?></h3>

                        </div>
                    </div>
                </div>
                <!-- /Left Section -->
                <!-- Sidebar -->
                <div id="sidebar" class="sidebar col-sm-3 col-md-3 col-lg-3">
                    <div class="widget">
                        <h3>My Account</h3>
                        <!-- menu-->
                        <div id="sidebar-nav">
                            <ul class="sidebar-nav">
                                <li class="active">
                                    <a href="#" style="color:#fff"><i class="fa fa-gears item-icon"></i> My Dashboard</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url();?>/artist/accountDetails"><i class="fa fa-user item-icon"></i> Account Details</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url();?>/artist/accountPortfolio"><i class="fa fa-pencil-square-o item-icon"></i> Portfolio</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url();?>/artist/accountStatistics"><i class="fa fa-shopping-cart item-icon"></i> Statistics</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url();?>/artist/accountSocial"><i class="fa fa-link item-icon"></i> Social Availabilty</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /menu-->
                    </div>
                </div>
                <!-- /Sidebar -->
            </div>
        </div>
    </div>
    <!-- /Main Content -->
</section>