<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Company Information</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Company Information</li>
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
					
					<h3 class="card-title">Update Company Information Form</h3>
				</div>
				<!-- /.card-header -->

				
				<div class="card-body">
					
					<!-- form start -->
					<form action="<?php echo base_url()?>update-company-info" method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?php echo $company_info->email; ?>">
									<input type="hidden" name="id" value="<?php echo $company_info->id; ?>">
									<span class="text-danger"><?php echo form_error('email'); ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="contact">Contact</label>
									<input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact" value="<?php echo $company_info->contact; ?>">
									<span class="text-danger"><?php echo form_error('contact'); ?></span>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="address">Address</label>
									<input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="<?php echo $company_info->address; ?>">
									<span class="text-danger"><?php echo form_error('address'); ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="address">Facebook Page Link</label>
									<input type="text" class="form-control" id="fb_page_link" name="fb_page_link" placeholder="Enter Facebook Page Link" value="<?php echo $company_info->fb_page_link; ?>">
									<span class="text-danger"><?php echo form_error('fb_page_link'); ?></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="twitter_page_link">Twitter Page Link</label>
									<input type="text" class="form-control" id="twitter_page_link" name="twitter_page_link" placeholder="Enter Twitter Page Link" value="<?php echo $company_info->twitter_page_link; ?>">
									<span class="text-danger"><?php echo form_error('twitter_page_link'); ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label instar="address">Instagram Page Link</label>
									<input type="text" class="form-control" id="insta_page_link" name="insta_page_link" placeholder="Enter Instagram Page Link" value="<?php echo $company_info->insta_page_link; ?>">
									<span class="text-danger"><?php echo form_error('insta_page_link'); ?></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="youtube_page_link">Youtube Page Link</label>
									<input type="text" class="form-control" id="youtube_page_link" name="youtube_page_link" placeholder="Enter Youtube Page Link" value="<?php echo $company_info->youtube_page_link; ?>">
									<span class="text-danger"><?php echo form_error('youtube_page_link'); ?></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label instar="linkedin_page_link">Linkedin Page Link</label>
									<input type="text" class="form-control" id="linkedin_page_link" name="linkedin_page_link" placeholder="Enter Linkedin Page Link" value="<?php echo $company_info->linkedin_page_link; ?>">
									<span class="text-danger"><?php echo form_error('linkedin_page_link'); ?></span>
								</div>
							</div>
						</div>

						<button type="submit" id="submit" class="btn btn-secondary">Update Information</button>

					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- /.card -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
