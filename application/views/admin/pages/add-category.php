<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Add Category</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Add Category</li>
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
							<h3 class="card-title">Add Category Form</h3>
						</div>
						<div class="col-6 text-right text-white">
							<a href="<?php echo base_url()?>manage-categories" class="btn btn-secondary btn-sm">Back</a>
						</div>
					</div>
					
				</div>
				<!-- /.card-header -->

				<!-- form start -->
				<form action="<?php echo base_url()?>insert-category" method="POST" enctype="multipart/form-data">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="item_name">Category Name</label>
									<input type="text" class="form-control" id="item_name" name="category_name" placeholder="Enter Category Name" value="<?php echo set_value('category_name')?>">
									<span class="text-danger"><?php echo form_error('category_name'); ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleInputFile">Category Image</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="exampleInputFile" name="category_image">
											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
										<div class="input-group-append">
											<span class="input-group-text" id="">Upload</span>
										</div>
									</div>
									<span class="text-danger"><?php echo form_error('category_image'); ?></span>
								</div>
							</div>
						</div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<button type="submit" id="submit" class="btn btn-secondary">Add Category</button>
					</div>
				</form>
			</div>
			<!-- /.card -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
