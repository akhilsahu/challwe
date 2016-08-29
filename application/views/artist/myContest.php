<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>My Contest</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>My Contest List</li>
				</ul>
			</nav>
		</div>

	</div>
</div>

<!-- Content
================================================== -->
<div class="container">
	
	<!-- Table -->
	<div class="sixteen columns">

		<?php if($user['logged_in']){?>
			<span style="float:right;padding-right:5%;">
				<a href="<?php echo site_url();?>/artist/addContest" class=" button">Create Contest</a>
			</span>
		<?php }?>

		<table class="manage-table resumes responsive-table">

			<tr>
				<th><i class="fa fa-file-text"></i> Title</th>
				<th><i class="fa fa-calendar"></i> Date Created</th>
				<th><i class="fa fa-calendar"></i> Date Closed</th>
				<th><i class="fa fa-tags"></i> Skills</th>
				<th><i class="fa fa-map-marker"></i> Price</th>
				<th></th>
			</tr>

			<!-- Item #1 -->
			<?php 

			foreach($list as $val){


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
					<a href="<?php echo site_url();?>/content/showContest?id=<?php echo $val["int_contest_id"]?>"><i class="fa fa-check-circle-o"></i> Show Contest</a>
					<?php if($val['int_status'] == 1 ){
						echo "Participated ";
					}else{  ?>
					<a onclick="javascript:
					if(confirm('Are you sure? You want to participate in contest?')){
						setparticipate('<?php echo $val["int_contest_id"]?>','<?php echo $val['int_created_by'] ?>');
					}"><i class="fa fa-eye-slash"></i> participate</a>
					<?php } ?>
				</td>
			</tr>
			<?php }?>

		</table>

		<br>
	
		</div>
	</div>

</div>
