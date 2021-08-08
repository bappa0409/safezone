<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Manage Product</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Manage Product</li>
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
							<h3 class="card-title">Information of Product</h3>
						</div>
						<div class="col-6 text-right text-white">
							<a href="<?php echo base_url()?>add-product" class="btn btn-secondary btn-sm">Add Product</a>
						</div>
					</div>
				</div>
				<!-- /.card-header -->
				
				<!-- <div class="card-body">
					<table id="example1" class="table table-bordered table-striped text-center">
						<thead class="text-center">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Image</th>
								<th>Price</th>
								<th>SKU</th>
								<th>Stock</th>
								<th>Quantity</th>
								<th>Description</th>
								<th>Special</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($show_product_info as $show_info) {
								?>
								<tr>
									<td><?php echo $show_info->product_id ?></td>
									<td><?php echo $show_info->product_name ?></td>
									<td>
										<img src="<?php echo base_url()?>/<?php echo $show_info->thumbnail_image; ?>" style="height: 70px;">
									</td>
									<td><?php echo $show_info->product_price ?></td>
									<td><?php echo $show_info->product_sku ?></td>
									<td>
										<?php 
										if ($show_info->product_stock == 1) {
											echo "In Stock";
											
										}
										else{
											echo "Out of Stock";
										}
										?>
									</td>
									<td><?php echo $show_info->stock_quantity ?></td>
									<td><?php echo $show_info->short_description ?></td>
									<td>
										<?php 
										if ($show_info->special_product == 0) {
											?>
											<input type="checkbox" disabled>
											<?php 
										}
										else{
											?>
											<input type="checkbox" checked="" disabled>
											
											<?php 
										}
										?>
									</td>
									<td>
										<?php 
										if ($show_info->status == 1) {
											?>Active
											<a href="<?php echo base_url()?>change-product-status/<?php echo $show_info->product_id?>/0" class="btn btn-sm btn-danger mr-1">Deactive
											</a>
											<?php 
										}
										else{
											?>Inactive
											<a href="<?php echo base_url()?>change-product-status/<?php echo $show_info->product_id?>/1" class="btn btn-sm btn-success mr-1">Active
											</a>
											<?php 
										}
										?>
									</td>
									<td>
										<a href="<?php echo base_url()?>edit-product/<?php echo $show_info->product_id ?>" class="btn btn-sm btn-success mr-1">
											<i class="fas fa-edit" style=""></i>
										</a>
										<a href="<?php echo base_url()?>delete-product/<?php echo $show_info->product_id ?>" class="btn btn-sm btn-danger ml-1" onclick="return confirm('Are you sure to delete?')">
											<i class="far fa-trash-alt"></i>
										</a>
									</td>
								</tr>

								<?php
							} ?>

						</tbody>
					</table>
				</div> -->

				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped text-center">
						<thead class="text-center">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Image</th>
								<th>Price</th>
								<th>SKU</th>
								<th>Stock</th>
								<th>Quantity</th>
								<th>Short Description</th>
								<th>Description</th>
								<th>Special</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($show_product_info as $show_info) {
								?>
								<tr>
									<td><?php echo $show_info->product_id ?></td>
									<td><?php echo $show_info->product_name ?></td>
									<td>
										<img src="<?php echo base_url()?>/<?php echo $show_info->thumbnail_image; ?>" style="height: 100px;">
									</td>
									<td><?php echo $show_info->product_price ?></td>
									<td><?php echo $show_info->product_sku ?></td>
									<td>
										<?php 
										if ($show_info->product_stock == 1) {
											echo "In Stock";
											
										}
										else{
											echo "Out of Stock";
										}
										?>
									</td>
									<td><?php echo $show_info->stock_quantity ?></td>
									<td><?php echo character_limiter($show_info->short_description, 35); ?></td>
									<td><?php echo character_limiter($show_info->description, 35); ?></td>
									<td>
										<?php 
										if ($show_info->daily_deals == 0) {
											?>
											<input type="checkbox" disabled>
											<?php 
										}
										else{
											?>
											<input type="checkbox" checked="" disabled>
											
											<?php 
										}
										?>
									</td>
									<td>
										<?php 
										if ($show_info->status == 1) {
										?>Active
										<a href="<?php echo base_url()?>change-product-status/<?php echo $show_info->product_id?>/0" class="btn btn-sm btn-danger mr-1">Deactive
										</a>
										<?php 
									}
									else{
									?>Inactive
									<a href="<?php echo base_url()?>change-product-status/<?php echo $show_info->product_id?>/1" class="btn btn-sm btn-success mr-1">Active
									</a>
									<?php 
								}
								?>
							</td>
							<td>
								<a href="<?php echo base_url()?>edit-product/<?php echo $show_info->product_id ?>" class="btn btn-sm btn-success mr-1">
									<i class="fas fa-edit" style=""></i>
								</a>
								<a href="<?php echo base_url()?>delete-product/<?php echo $show_info->product_id ?>" class="btn btn-sm btn-danger ml-1" onclick="return confirm('Are you sure to delete?')">
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
