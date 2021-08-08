<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Admin Registration</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Admin Registration</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Registration Form</h3>
						</div>
						<!-- /.card-header -->

						<!-- form start -->
						<?php
						$message = $this->session->userdata('admin_registration');
						if ($message) {
							?>
							<div class="alert alert-success" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<?php
								echo $message;
								$this->session->unset_userdata('admin_registration');
								?>
							</div>
							<?php 
						}
						?>
						<form role="form" action="<?php echo base_url()?>admin-register-save" method="POST"enctype="multipart/form-data">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-control-label">Full Name</label>
											<input type="text" class="form-control" name="admin_name" placeholder="Enter Name" value="<?php echo set_value('admin_name'); ?>" required="">
											<span class="text-danger"><?php echo form_error('admin_name'); ?></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-control-label">Contact Number</label>
											<input type="text" class="form-control" name="admin_contact" placeholder="Enter Number" value="<?php echo set_value('admin_contact'); ?>" required="">
											<span class="text-danger"><?php echo form_error('admin_contact'); ?></span>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="form-control-label">Email Address</label>
									<input type="email" class="form-control" name="admin_email" placeholder="Enter Email" value="<?php echo set_value('admin_email'); ?>" required="">
									<span class="text-danger"><?php echo form_error('admin_email'); ?></span>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-control-label">Username</label>
											<input type="text" class="form-control" name="admin_username" placeholder="Enter User Name" value="<?php echo set_value('admin_username'); ?>" required="">
											<span class="text-danger"><?php echo form_error('admin_username'); ?></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="exampleInputFile">Image</label>
											<div class="input-group">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="exampleInputFile" name="admin_image">
													<label class="custom-file-label" for="exampleInputFile">Choose file</label>
												</div>
												<div class="input-group-append">
													<span class="input-group-text" id="">Upload</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-control-label">Password</label>
											<input type="password" class="form-control" name="admin_password" placeholder="Enter Password" value="<?php echo set_value('admin_password'); ?>" required="">
											<span class="text-danger"><?php echo form_error('admin_password'); ?></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-control-label">Confirm Password</label>
											<input type="password" class="form-control" name="confirm_password" placeholder="Enter Confirm Password" value="<?php echo set_value('confirm_password'); ?>" required="">
											<span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
										</div>
									</div>
								</div>

								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Check me out</label>
								</div>
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
					<!-- /.card -->
				</div>
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
