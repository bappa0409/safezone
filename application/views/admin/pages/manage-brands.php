<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Manage Brands</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Manage Brands</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-6">
							<h3 class="card-title">Information of Brands</h3>
						</div>
						<div class="col-6 text-right text-white">
							<a href="<?php echo base_url()?>add-brand" class="btn btn-secondary btn-sm">Add Brand</a>
						</div>
					</div>
				</div>
				<!-- /.card-header -->
				
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped text-center">
						<thead class="text-center">
							<tr>
								<th>Brand ID</th>
								<th>Brand Name</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($show_brands_info as $show_info) {
								?>
								<tr>
									<td style="width:15%"><?php echo $show_info->brand_id ?></td>
									<td><?php echo $show_info->brand_name ?></td>
									<td>
										<?php 
										if ($show_info->status == 0) {
											?>Inactive
											<a href="<?php echo base_url()?>change-brand-status/<?php echo $show_info->brand_id?>/1" class="btn btn-sm btn-success mr-1">Active
											</a>
											<?php 
										}
										else{
											?>
											Active
											<a href="<?php echo base_url()?>change-brand-status/<?php echo $show_info->brand_id?>/0" class="btn btn-sm btn-danger mr-1">Deactive
											</a>
											<?php 
										}
										?>
									</td>
									<td>
										<a href="<?php echo base_url()?>edit-brand/<?php echo $show_info->brand_id ?>" class="btn btn-sm btn-success mr-1">
											<i class="fas fa-edit" style=""></i>
										</a>
										<a href="<?php echo base_url()?>delete-brand/<?php echo $show_info->brand_id ?>" class="btn btn-sm btn-danger ml-1" onclick="return confirm('Are you sure to delete?')">
											<i class="far fa-trash-alt"></i>
										</a>
									</td>
								</tr>

								<?php
							} ?>

						</tbody>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
