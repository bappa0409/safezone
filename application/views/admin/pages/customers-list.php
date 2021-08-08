<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Customer's List</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url()?>dashboard">Home</a></li>
						<li class="breadcrumb-item active">Customer's List</li>
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
					<h3 class="card-title">All Customer's Information</h3>
				</div>

				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped text-center">
						<thead class="text-center">
							<tr>	
								<th>ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Number</th>
								<th>Location</th>
								<th>City</th>
								<th>Postal Code</th>
								<th>Registration Date</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($all_customer_information as $show_info) {
								?>
								<tr>
									<td><?php echo $show_info->customer_id ?></td>
									<td>
										<img src="<?php echo base_url()?>/<?php echo $show_info->customer_image ?>" alt="" class="w-100" style="max-width: 30px; border-radius: 50%;margin-right: 5px; width: 50px; height: 30px;">
										<?php echo ucwords($show_info->customer_fname.' '.$show_info->customer_lname) ?></td>
									<td><?php echo $show_info->customer_email ?></td>
									<td><?php echo $show_info->customer_phone ?></td>
									<td><?php echo $show_info->address ?></td>
									<td><?php echo $show_info->city ?></td>
									<td><?php echo $show_info->postal_code ?></td>
									<td><?php echo $show_info->created_time ?></td>
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
