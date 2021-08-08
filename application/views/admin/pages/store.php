<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Update Schedules</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Update Schedules</li>
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
					<h3 class="card-title">Update Schedules Form</h3>
				</div>
				<!-- /.card-header -->

				<!-- form start -->
				<form action="<?php echo base_url()?>update-schedule" method="POST" enctype="multipart/form-data" name="schedules_form">
					<div class="card-body text-center">
						<div class="row">
							<div class="col-md-4">
								<label for="saturday">Saturday</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="saturday_open" value="<?php echo $show_schedule_info->saturday_open ?>">

											<input type="hidden" name="id" value="<?php echo $show_schedule_info->id ?>">

											<span class="text-danger"><?php echo form_error('saturday_open'); ?></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="saturday_close" value="<?php echo $show_schedule_info->saturday_close ?>">
											<span class="text-danger"><?php echo form_error('saturday_close'); ?></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="saturday_close" placeholder="if it will be closed" >

									<span class="text-danger"><?php echo form_error('saturday_close'); ?></span>
								</div>

							</div>

							<div class="col-md-4">
								<label for="sunday">Sunday</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="sunday_open" value="<?php echo $show_schedule_info->sunday_open ?>">
											<span class="text-danger"><?php echo form_error('sunday_open'); ?></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="sunday_close" value="<?php echo $show_schedule_info->sunday_close ?>">
											<span class="text-danger"><?php echo form_error('sunday_close'); ?></span>
										</div>
									</div>
								</div>
							</div>


							<div class="col-md-4">
								<label for="monday">Monday</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="monday_open" value="<?php echo $show_schedule_info->monday_open ?>">
											<span class="text-danger"><?php echo form_error('monday_open'); ?></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="monday_close" value="<?php echo $show_schedule_info->monday_close ?>">
											<span class="text-danger"><?php echo form_error('monday_close'); ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label for="tuesday">Tuesday</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="tuesday_open" value="<?php echo $show_schedule_info->tuesday_open ?>">
											<span class="text-danger"><?php echo form_error('tuesday_open'); ?></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="tuesday_close" value="<?php echo $show_schedule_info->tuesday_close ?>">
											<span class="text-danger"><?php echo form_error('tuesday_close'); ?></span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<label for="wednesday">Wednesday</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="wednesday_open" value="<?php echo $show_schedule_info->wednesday_open ?>">
											<span class="text-danger"><?php echo form_error('wednesday_open'); ?></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="wednesday_close" value="<?php echo $show_schedule_info->wednesday_close ?>">
											<span class="text-danger"><?php echo form_error('wednesday_close'); ?></span>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<label for="thursday">Thursday</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="thursday_open" value="<?php echo $show_schedule_info->thursday_open ?>">
											<span class="text-danger"><?php echo form_error('thursday_open'); ?></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="thursday_close" value="<?php echo $show_schedule_info->thursday_close ?>">
											<span class="text-danger"><?php echo form_error('thursday_close'); ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label for="friday" class="text-center">Friday</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="friday_open" value="<?php echo $show_schedule_info->friday_open ?>">
											<span class="text-danger"><?php echo form_error('friday_open'); ?></span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="time" class="form-control" name="friday_close" value="<?php echo $show_schedule_info->friday_close ?>">
											<span class="text-danger"><?php echo form_error('friday_close'); ?></span>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<button type="submit" id="submit" class="btn btn-secondary">Update Category</button>
					</div>
				</form>
			</div>
			<!-- /.card -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
</div>
<!-- /.content-wrapper -->
