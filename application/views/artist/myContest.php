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
			<tr>
				<td class="alert-name">Looking for job</td>
				<td>September 30, 2015</td>
				<td>September 1, 2015</td>
				<td class="keywords">Web Developer, PHP, HTML</td>
				<td>$120</td>
				<td class="action">
					<a href="#"><i class="fa fa-check-circle-o"></i> Show Contest</a>
					<a href="#"><i class="fa fa-eye-slash"></i> participate</a>
				</td>
			</tr>

		</table>

		<br>
	<?php /*
		<a href="#small-dialog" class="popup-with-zoom-anim button">Add Alert</a>

		<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
			<div class="small-dialog-headline">
				<h2>Add Alert</h2>
			</div>

			<div class="small-dialog-content">
				<form action="#" method="get" >
					<input type="text" placeholder="Alert Name" value=""/>
					<input type="text" placeholder="Keyword" value=""/>
					<input type="text" placeholder="Location" value=""/>

					<!-- Select -->
					<select data-placeholder="Email Frequency" class="chosen-select-no-single">
						<option value="">Email Frequency</option>
						<option value="1">Daily</option>
						<option value="2">Weekly</option>
						<option value="3">Fortnightly</option>
					</select>

					<div class="clearfix"></div>
					<div class="margin-top-15"></div>

					<!-- Select -->
					<select data-placeholder="Job Type" class="chosen-select" multiple>
						<option value="1">Full-Time</option>
						<option value="2">Part-Time</option>
						<option value="3">Internship</option>
						<option value="4">Freelance</option>
						<option value="5">Temporary</option>
					</select>

					<div class="margin-top-20"></div>
					<div class="divider"></div>

					<button class="send">Save Alert</button>
				</form>
			</div>
			
			*/?>
		</div>
	</div>

</div>
