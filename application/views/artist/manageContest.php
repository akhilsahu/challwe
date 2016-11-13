<!-- Titlebar
================================================== -->
<div id="titlebar" class="single margin-top-90">
    <div class="container">
        <div class="sixteen columns">
            <h2>Manage Challenges</h2>
            <div class="ts-breadcrumbs breadcrumbs-single-post container">
                <div class="ts-breadcrumbs-content">
                    <a href="<?php echo base_url(); ?>">Home</a><i class="icon-right"></i>Manage Challenge
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content
================================================== -->
<div class="container">
    <!-- Table -->
    <div class="sixteen columns">
        <?php if ($user['logged_in']) { ?>
            <div class="btn-block text-right" style="margin-bottom: 20px;">
                <a href="<?php echo site_url(); ?>/artist/myContest" class="btn-primary button btn-challange">My Challenges</a>
                <a href="<?php echo site_url(); ?>/artist/addContest" class="btn-primary button btn-challange">Create Challenge</a>
            </div>
        <?php } ?>
        <table class="manage-table resumes responsive-table table table-striped">
            <tr>
                <th><i class="fa fa-file-text"></i> Title</th>
                <th><i class="fa fa-calendar"></i> Start Date</th>
                <th><i class="fa fa-calendar"></i> Date Closed</th>
                <th><i class="fa fa-tags"></i> Skills</th>
                <th><i class="fa fa-map-marker"></i> Price</th>
                <th></th>
            </tr>
            <!-- Item #1 -->
            <?php
            /* 	echo "<pre><br>";
              print_r($directory);
             */
            foreach ($list as $val) {
                $s_date = date_create($val['dt_start_date']);
                $c_date = date_create($val['dt_last_date']);
                ?>
                <tr>
                    <td class="alert-name"><?php echo $val['txt_contest_name']; ?></td>
                    <td><?php echo date_format($s_date, "F j, Y"); ?></td>
                    <td><?php echo date_format($c_date, "F j, Y"); ?></td>
                    <td class="keywords"><?php echo $val['skills']; ?></td>
                    <td>$ <?php echo $val['txt_budget']; ?></td>
                    <td class="action">
                        <a href="<?php echo site_url(); ?>/artist/viewcontest?id=<?php echo $val["int_contest_id"] ?>"><i class="fa fa-check-circle-o"></i>View</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
