<div id="content">
	<section>
		<div class="section-header">
			<h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> Add Category</h3>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-lg-12">
					<div class="box box-outlined">
						<div class="box-body no-padding">
							<form class="form-horizontal form-banded form-bordered" action="<?php echo site_url();?>/admin/addcategory" accept-charset="utf-8" method="post"  enctype="multipart/form-data">
								<div class="form-group form-group-md">
									<div class="col-md-2">
										<label class="control-label">Name</label>
									</div>
									<div class="col-md-10">
										<input type="text" id="txt_name" name="txt_name" value="" class="form-control">
									</div>
								</div>
								<div class="form-group form-group-md">
									<div class="col-md-2">
										<label class="control-label">File Name</label>
									</div>
									<div class="col-md-10">
										<input type="file" id="file_image" name="file_image" class="form-control">
									</div>
								</div>
								<div class="form-group form-group-md">
									<div class="col-md-12">
										<button id="save_contact" class="btn btn-info pull-right" type="submit">Add</button>
									</div>
								</div>
							</form>
						</div><!--end .box-body -->
					</div><!--end .box -->
				</div><!--end .col-lg-12 -->
			</div><!--end .row -->
		</div>
	</section>
<script>
	$(document).ready(function(){
		$("#save_contact").click(function(){
			if($("#txt_name").val()=="")
			{
				alert("Please enter Name");
				$("#contact_name").focus();
				return false;
			}
		});
	});
</script>