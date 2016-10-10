<div id="content">
	<section>
		<div class="section-header">
			<h3 class="text-standard"><i class="fa fa-fw fa-arrow-circle-right text-gray-light"></i> Category List</h3>
		</div>
	<div class="section-body">
		<div class="row">
			<div class="col-lg-12">
				<div class="box">
					<div class="box-body table-responsive">
						<div id="datatable1_wrapper" class="dataTables_wrapper" role="grid">
							<div id="datatable1_length" class="dataTables_length">
								<table id="datatable1" class="table table-striped table-hover dataTable" aria-describedby="datatable1_info">
									<thead>
										<tr role="row">
											<th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1"  style="width: 10%;"></th>
											<th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1"  style="width: 30%;">Name</th>
											<th class="sorting" role="columnheader" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1"  style="width: 30%;">File Name</th>
											<th class="sort-numeric sorting" role="columnheader" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1"  style="width: 30%;">Actions</th>
										</tr>
									</thead>
								
									<tbody role="alert" aria-live="polite" aria-relevant="all">
									<?php 

										$i=1;

										$statusClass=array("bg-red","bg-blue");

										foreach ($list as $val) {?>
										<tr class="<?php echo ($i%2==0)?'gradeX odd':'radeC even'; ?>">
										  <td><?php echo $i++;?></td>
										  <td><?php echo $val['txt_name'];?></td>
										  <td><img src="<?php echo base_url()."".$val['txt_filepath'];?>" alt="Smiley face" height="42" width="42"></td>                      
											<td>
											  <a href="<?php echo site_url().'/admin/editcategory/'.$val['int_category_id']?>" class="btn btn-primary">Edit</a>
											  <a href="<?php echo site_url().'/admin/deletedcategory/'.$val['int_category_id']?>" class="btn btn-danger">Delete</a>
										  </td>                      
										</tr>
									<?php }?>
									</tbody>
								</table>
							</div>
						</div>
					</div><!--end .box-body -->
				</div><!--end .box -->
			</div><!--end .col-lg-12 -->
		</div>
		<!-- END DATATABLE 1 -->
		
		
		
	</div>
</section>
	</div><!--end #content-->		
	<!-- END CONTENT -->
