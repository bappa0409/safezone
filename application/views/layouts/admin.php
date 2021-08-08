<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>AdminLTE 3 | Dashboard 2</title>

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin_assets/plugins/fontawesome-free/css/all.min.css">

	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin_assets/dist/css/adminlte.min.css">

	<!-- SummerNote -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin_assets/plugins/summernote/summernote-bs4.css">

	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

	<!-- Toastr -->
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/admin_assets/plugins/toastr/toastr.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?php echo base_url()?>dashboard" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?php echo base_url()?>contact" class="nav-link">Contact</a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Messages Dropdown Menu -->
				<li class="nav-item dropdown">
					<div class="user-panel d-flex">

						<div class="image">
							<img src="<?php echo base_url()?><?php echo $this->session->userdata('admin_image'); ?>" class="img-circle elevation-2" alt="User Image">
						</div>
						<a class="nav-link dropdown-toggle" href="<?php echo base_url()?>dashboard" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php echo $this->session->userdata('admin_name'); ?>
						</a>
						<div class="info">
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top: 8px;">
								<a class="dropdown-item" href="#">Profile</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url();?>admin-logout">Logout</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?php echo base_url()?>dashboard" class="brand-link">
				<img src="<?php echo base_url();?>/assets/admin_assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
				style="opacity: .8">
				<span class="brand-text font-weight-light">AdminLTE 3</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Dropdown open class = menu-open -->

						<li class="nav-item">
							<a href="<?php echo base_url()?>dashboard" class="nav-link active">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Dashboard</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url()?>admin-registration" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>Admin Register</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>Header<i class="fas fa-angle-left right" ></i></p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?php echo base_url()?>brand-logo" class="nav-link nav-link-edit">
										<i class="far fa-circle nav-icon nav-link-icon"></i>
										<p class="nav-link-p">Update Logo</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url()?>slider" class="nav-link nav-link-edit">
										<i class="far fa-circle nav-icon nav-link-icon"></i>
										<p class="nav-link-p">Manage Slider</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?php echo base_url()?>promotion-images" class="nav-link nav-link-edit">
										<i class="far fa-circle nav-icon nav-link-icon"></i>
										<p class="nav-link-p">Promotion Images</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?php echo base_url()?>company-info" class="nav-link nav-link-edit">
										<i class="far fa-circle nav-icon nav-link-icon"></i>
										<p class="nav-link-p">Company Info</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-utensils"></i>
								<p>Category<i class="fas fa-angle-left right"></i></p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?php echo base_url()?>add-category" class="nav-link nav-link-edit">
										<i class="far fa-circle nav-icon nav-link-icon"></i>
										<p class="nav-link-p">Add Category</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url()?>manage-categories" class="nav-link nav-link-edit">
										<i class="far fa-circle nav-icon nav-link-icon"></i>
										<p class="nav-link-p">Manage categories</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-utensils"></i>
								<p>Brand<i class="fas fa-angle-left right"></i></p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?php echo base_url()?>add-brand" class="nav-link nav-link-edit">
										<i class="far fa-circle nav-icon nav-link-icon"></i>
										<p class="nav-link-p">Add Brand</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url()?>manage-brands" class="nav-link nav-link-edit">
										<i class="far fa-circle nav-icon nav-link-icon"></i>
										<p class="nav-link-p">Manage Brands</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-utensils"></i>
								<p>Product<i class="fas fa-angle-left right"></i></p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?php echo base_url()?>add-product" class="nav-link nav-link-edit">
										<i class="far fa-circle nav-icon nav-link-icon"></i>
										<p class="nav-link-p">Add Product</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?php echo base_url()?>manage-products" class="nav-link nav-link-edit">
										<i class="far fa-circle nav-icon nav-link-icon"></i>
										<p class="nav-link-p">Manage Products</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-header text-uppercase">Admin Section</li>

						<li class="nav-item">
							<a href="<?php echo base_url()?>manage-shipping-cost" class="nav-link">
								<i class="nav-icon fas fa-book"></i>
								<p>Shipping Cost</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url()?>customers-list" class="nav-link">
								<i class="nav-icon fas fa-book"></i>
								<p>Customers List</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo base_url()?>orders-list" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>Orders List</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>Shipping List</p>
							</a>
						</li>

					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
		<?php echo $admin_main_content; ?>
		<!-- Main Footer -->
		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 3.0.5
			</div>
		</footer>
	</div>
	<!-- ./wrapper -->


	<!-- REQUIRED SCRIPTS -->
	<!-- jQuery -->
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap -->
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- overlayScrollbars -->
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

	<!-- AdminLTE App -->
	<script src="<?php echo base_url()?>/assets/admin_assets/dist/js/adminlte.js"></script>

	<!-- OPTIONAL SCRIPTS -->
	<script src="<?php echo base_url()?>/assets/admin_assets/dist/js/demo.js"></script>

	<!-- jQuery Mapael -->
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/raphael/raphael.min.js"></script>
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>

	<!-- DataTables -->
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

	<!-- Bootstrap Switch -->
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

	<!-- Custom File Input -->
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

	<!-- Toastr -->
	<script src="<?php echo base_url()?>/assets/admin_assets/plugins/toastr/toastr.min.js"></script>

	<!-- PAGE SCRIPTS -->
	<script src="<?php echo base_url();?>/assets/admin_assets/dist/js/pages/dashboard2.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			bsCustomFileInput.init();
		});
	</script>

	<script type="text/javascript">
		$("input[data-bootstrap-switch]").each(function(){
			$(this).bootstrapSwitch('state', $(this).prop('checked'));
		});
	</script>


	<!-- SummerNote -->
	<script src="<?php echo base_url();?>/assets/admin_assets/plugins/summernote/summernote-bs4.min.js"></script>
	<script>
		$(function () {
			$('.textarea').summernote()
		})
	</script>

	<script>
		$(function () {
			$("#example1").DataTable({
				"responsive": true,
				"autoWidth": false,
			});

			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			});
		});
	</script>

	<script type="text/javascript">
		<?php if ($this->session->flashdata('success')) {?>
			toastr.success("<?php echo $this->session->flashdata('success'); ?>");
		<?php } else if ($this->session->flashdata('error')) {?>
			toastr.error("<?php echo $this->session->flashdata('error'); ?>");
		<?php } else if ($this->session->flashdata('warning')) {?>
			toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
		<?php } else if ($this->session->flashdata('info')) {?>
			toastr.info("<?php echo $this->session->flashdata('info'); ?>");
		<?php }?>
	</script>

</body>
</html>
