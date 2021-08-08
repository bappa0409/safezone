<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Manage Promotion Images</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Manage Promotion Images</li>
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
					<h3 class="card-title">Information of Manage Promotion Images</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped text-center">
						<thead class="text-center">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Images</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($show_promotion_images as $show_info) {
								?>
								<tr>
									<td><?php echo $show_info->id ?></td>
									<td><?php echo $show_info->image_name ?></td>
									<td>
										<img src="<?php echo base_url()?>/<?php echo $show_info->image;?>" style="height: 120px;">
									</td>

									<td style="width: 10%;">
										<a href="<?php echo base_url()?>edit-promotion-images/<?php echo $show_info->id ?>" class="btn btn-sm btn-success mr-1">
											<i class="fas fa-edit" style=""></i>
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



