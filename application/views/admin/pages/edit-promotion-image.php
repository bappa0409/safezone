<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Update Promotion Images</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Update Promotion Images</li>
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
							<h3 class="card-title">Update Promotion Image Form</h3>
						</div>
						<div class="col-6 text-right text-white">
							<a href="<?php echo base_url()?>promotion-images" class="btn btn-secondary btn-sm">Back</a>
						</div>
					</div>
					
				</div>
				<!-- /.card-header -->

				<!-- form start -->

				<form action="<?php echo base_url()?>promotion-images-update" method="POST" enctype="multipart/form-data">
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<img src="<?php echo base_url()?>/<?php echo $edit_promotion_images_by_id->image;?>" class="w-75">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="hidden" name="id" value="<?php echo $edit_promotion_images_by_id->id?>">

											<input type="hidden" name="old_image" value="<?php echo $edit_promotion_images_by_id->image;?>">

									<label for="exampleInputFile"><?php echo $edit_promotion_images_by_id->image_name;?></label>

											

									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="exampleInputFile" name="image">


											<label class="custom-file-label" for="exampleInputFile">Choose file</label>
										</div>
										<div class="input-group-append">
											<span class="input-group-text" id="">Upload</span>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-secondary" style="float: right;">Update Images</button>
							</div>
						</div>
					</div>
					<!-- /.card-body -->
				</form>
			</div>
			<!-- /.card -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
