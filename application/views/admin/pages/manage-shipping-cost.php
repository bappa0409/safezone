<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Manage Shipping Cost</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Shipping Cost</li>
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
							<h3 class="card-title">Information of Shipping Cost</h3>
						</div>
						<div class="col-6 text-right text-white">
							<a href="<?php echo base_url()?>add-shipping-method" class="btn btn-secondary btn-sm">Add Shipping Method</a>
						</div>
					</div>
				</div>
				<!-- /.card-header -->
				
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped text-center">
						<thead class="text-center">
							<tr>
								<th>ID</th>
								<th>Shipping Zone Name</th>
								<th>Shipping Cost</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($show_shipping_cost_info as $show_info) {
								?>
								<tr>
									<td><?php echo $show_info->id ?></td>
									<td>
										<?php 
										if ($show_info->shipping_zone == 1) {
											?>
											Inside Mymensing
											<?php
										}else{
											?>
											Outside Mymensing
											<?php
										}
										?>
									</td>
									<td><?php echo $show_info->shipping_cost ?> TK</td>
									<td>
										<a href="<?php echo base_url()?>edit-shipping-cost/<?php echo $show_info->id ?>" class="btn btn-sm btn-success mr-1">
											<i class="fas fa-edit" style=""></i>
										</a>
										<a href="<?php echo base_url()?>delete-shipping-cost/<?php echo $show_info->id ?>" class="btn btn-sm btn-danger ml-1" onclick="return confirm('Are you sure to delete?')">
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
