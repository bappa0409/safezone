<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Add Brand</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Add Brand</li>
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
							<h3 class="card-title">Add Brand Form</h3>
						</div>
						<div class="col-6 text-right text-white">
							<a href="<?php echo base_url()?>manage-brands" class="btn btn-secondary btn-sm">Back</a>
						</div>
					</div>
					
				</div>
				<!-- /.card-header -->

				<!-- form start -->
				<form action="<?php echo base_url()?>insert-brand" method="POST" enctype="multipart/form-data">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="brand_name">Brand Name</label>
									<input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Enter Brand Name" value="<?php echo set_value('brand_name')?>">
									<span class="text-danger"><?php echo form_error('brand_name'); ?></span>
								</div>
							</div>
						</div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<button type="submit" id="submit" class="btn btn-secondary">Add Brand</button>
					</div>
				</form>
			</div>
			<!-- /.card -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
