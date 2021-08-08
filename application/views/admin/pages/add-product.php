<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Add Product</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Add Product</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- general form elements -->
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-6">
							<h3 class="card-title">Add Product Form</h3>
						</div>
						<div class="col-6 text-right text-white">
							<a href="<?php echo base_url()?>manage-products" class="btn btn-secondary btn-sm">Back</a>
						</div>
					</div>
					
				</div>
				<!-- /.card-header -->

				<!-- form start -->
				<form action="<?php echo base_url()?>insert-product" method="POST" enctype="multipart/form-data">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="product_name">Product Name</label>
									<input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name" value="<?php echo set_value('product_name')?>">
									<span class="text-danger"><?php echo form_error('product_name'); ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="product_price">Product Price</label>
									<input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter Product Price" value="<?php echo set_value('product_price')?>">
									<span class="text-danger"><?php echo form_error('product_price'); ?></span>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="product_category">Product Category</label>
									<select class="form-control" name="product_category" id="product_category" required="">
										<option>Select One</option>
										<?php 
										foreach ($show_active_categories_info as $show_info) {
											?>
											<option value="<?php echo $show_info->category_id?>"><?php echo $show_info->category_name?></option>

											<?php
										} ?>
									</select>
									<span class="text-danger"><?php echo form_error('product_category'); ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="product_brand">Product Brand</label>
									<select class="form-control" name="product_brand" id="product_brand" required="">
										<option>Select One</option>
										<?php 
										foreach ($show_active_brands_info as $show_info) {
											?>
											<option value="<?php echo $show_info->brand_id?>"><?php echo $show_info->brand_name?></option>

											<?php
										} ?>
									</select>
									<span class="text-danger"><?php echo form_error('product_brand'); ?></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="product_stock">Product Stock</label>
									<select class="form-control" name="product_stock" id="product_stock" required="">
										<option>Select One</option>
										<option value="1">In Stock</option>
										<option value="2">Out of Stock</option>
									</select>
									<span class="text-danger"><?php echo form_error('product_stock'); ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="stock_quantity">Stock Quantity</label>
									<input type="text" class="form-control" name="stock_quantity" id="stock_quantity" placeholder="Enter Stock Quantity" value="<?php echo set_value('stock_quantity')?>">
									<span class="text-danger" id="stock_error_msg"><?php echo form_error('stock_quantity'); ?></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="product_sku">Product SKU</label>
									<input type="text" class="form-control" name="product_sku" id="product_sku" placeholder="Enter Product SKU" value="<?php echo set_value('product_sku')?>">
									<span class="text-danger"><?php echo form_error('product_sku'); ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleInputFile">Thumbnail Image</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="exampleInputFile" name="thumbnail_image">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
										<div class="input-group-append">
											<span class="input-group-text" id="">Upload</span>
										</div>
									</div>
									<span class="text-danger"><?php echo form_error('thumbnail_image'); ?></span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label>Short Description</label>
							<textarea class="textarea" placeholder="Write Short Description"  name="short_description" 
							style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo set_value('short_description'); ?></textarea>
						</div>

						<div class="form-group">
							<label>Description</label>
							<textarea class="textarea" placeholder="Write Description"  name="description" 
							style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo set_value('description'); ?></textarea>
						</div>

						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1" name="daily_deals">
							<label class="form-check-label" for="exampleCheck1">Daily Deals</label>
						</div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<button type="submit" id="submit" class="btn btn-secondary">Add Product</button>
					</div>
				</form>
			</div>
			<!-- /.card -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
