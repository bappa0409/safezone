<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Manage Categories</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Manage Categories</li>
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
							<h3 class="card-title">Information of Categories</h3>
						</div>
						<div class="col-6 text-right text-white">
							<a href="<?php echo base_url()?>add-category" class="btn btn-secondary btn-sm">Add Category</a>
						</div>
					</div>
				</div>
				<!-- /.card-header -->
				
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped text-center">
						<thead class="text-center">
							<tr>
								<th>Category ID</th>
								<th>Category Image</th>
								<th>Category Name</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($show_categories_info as $show_info) {
								?>
								<tr>
									<td><?php echo $show_info->category_id ?></td>
									<td>
										<img src="<?php echo base_url()?>/<?php echo $show_info->category_image ?>" alt="" style="height: 100px">
									</td>
									<td><?php echo $show_info->category_name ?></td>
									<td>
										<?php 
										if ($show_info->status == 0) {
											?>Inactive
											<a href="<?php echo base_url()?>change-category-status/<?php echo $show_info->category_id?>/1" class="btn btn-sm btn-success mr-1">Active
											</a>
											<?php 
										}
										else{
											?>
											Active
											<a href="<?php echo base_url()?>change-category-status/<?php echo $show_info->category_id?>/0" class="btn btn-sm btn-danger mr-1">Deactive
											</a>
											<?php 
										}
										?>
									</td>
									<td>
										<a href="<?php echo base_url()?>edit-category/<?php echo $show_info->category_id ?>" class="btn btn-sm btn-success mr-1">
											<i class="fas fa-edit" style=""></i>
										</a>
										<a href="<?php echo base_url()?>delete-category/<?php echo $show_info->category_id ?>" class="btn btn-sm btn-danger ml-1" onclick="return confirm('Are you sure to delete?')">
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
