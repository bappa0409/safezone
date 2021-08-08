<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Manage Slider</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Manage Slider</li>
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
							<h3 class="card-title">Information of Slider</h3>
						</div>
						<div class="col-6 text-right text-white">
							<a href="<?php echo base_url()?>add-slider" class="btn btn-secondary btn-sm">Add Slider</a>
						</div>
					</div>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped text-center">
						<thead class="text-center">
							<tr>
								<th>ID</th>
								<th>Slider Image</th>
								<th>Title</th>
								<th>Subtitle</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($slider_details as $show_info) {
								?>
								<tr>
									<td><?php echo $show_info->id; ?></td>
									<td>
										<img src="<?php echo base_url()?>/<?php echo $show_info->slider_image; ?>" style="height: 80px;">
									</td>
									<td><?php echo $show_info->title; ?></td>
									<td><?php echo $show_info->subtitle; ?></td>
									<td>
										<?php 
										if ($show_info->status == 0) {
											?>
											<a href="<?php echo base_url()?>change-slider-status/<?php echo $show_info->id?>/1" class="btn btn-sm btn-success mr-1">Active
											</a>
											<?php 
										}
										else{
											?>
											<a href="<?php echo base_url()?>change-slider-status/<?php echo $show_info->id?>/0" class="btn btn-sm btn-danger mr-1">InActive
											</a>
											<?php 
										}
										?>
									</td>
									<td style="width: 10%;">
										<a href="<?php echo base_url()?>edit-slider/<?php echo $show_info->id?>" class="btn btn-sm btn-success mr-1">
											<i class="fas fa-edit" style=""></i>
										</a>
											<!-- <a href="" class="btn btn-sm btn-info">
												<i class="fas fa-eye"></i>
											</a> -->
											<a href="<?php echo base_url()?>delete-slider/<?php echo $show_info->id?>" class="btn btn-sm btn-danger ml-1" onclick="return confirm('Are you sure to delete?')">
												<i class="far fa-trash-alt"></i>
											</a>
										</td>
									</tr>
									<?php
								}?>
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
