<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Update Shipping Method</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Update Shipping Method</li>
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
							<h3 class="card-title">Update Shipping Method Form</h3>
						</div>
						<div class="col-6 text-right text-white">
							<a href="<?php echo base_url()?>manage-shipping-cost" class="btn btn-secondary btn-sm">Back</a>
						</div>
					</div>
				</div>
				<!-- /.card-header -->

				<!-- form start -->
				<form role="form" action="<?php echo base_url()?>update-shipping-cost" method="POST" name="shipping_cost_form">
					<div class="card-body">
						<div class="form-group">
							<label for="shipping_zone">Shipping Zone Name</label>
							<select class="form-control" name="shipping_zone" id="shipping_zone">
								<option>Select One</option>
								<option value="Inside Mymensing">Inside Mymensing</option>
								<option value="Outside Mymensing">Outside Mymensing</option>
							</select>
							<span class="text-danger"><?php echo form_error('shipping_zone'); ?></span>
						</div>
						<div class="form-group">
							<label for="shipping_cost">Shipping Cost</label>
							<input type="text" class="form-control" id="shipping_cost" placeholder="Enter Shipping Cost" name="shipping_cost" value="<?php echo $edit_shipping_cost_by_id->shipping_cost; ?>">

							<input type="hidden" name="id" value="<?php echo $edit_shipping_cost_by_id->id; ?>">

							<span class="text-danger"><?php echo form_error('shipping_cost'); ?></span>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" id="submit" class="btn btn-secondary">Add Shipping Method</button>
					</div>
				</form>
			</div>
			<!-- /.card -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->


