<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 3 | Forgot Password</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin_assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/admin_assets/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<a href="<?php echo base_url()?>admin"><b>Recover</b>Password</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
				<p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

				<?php
				$message = $this->session->userdata('send_password_msg');
				if ($message) {
					?>
					<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<?php
						echo $message;
						$this->session->unset_userdata('send_password_msg');
						?>
					</div>
					<?php 
				}
				?>
				<?php
				$message = $this->session->userdata('reset_link_not_send');
				if ($message) {
					?>
					<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<?php
						echo $message;
						$this->session->unset_userdata('reset_link_not_send');
						?>
					</div>
					<?php 
				}
				?>
				<?php
				$message = $this->session->userdata('email_not_exit');
				if ($message) {
					?>
					<div class="alert alert-danger" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<?php
						echo $message;
						$this->session->unset_userdata('email_not_exit');
						?>
					</div>
				<?php } ?>
				<form action="<?php echo base_url()?>admin-password-reset" method="post">
					<div class="input-group mb-3">
						<input type="email" class="form-control" placeholder="Email Address" name="email" value="<?php echo set_value('email'); ?>">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<button type="submit" class="btn btn-primary btn-block">Request new password</button>
						</div>
						<!-- /.col -->
					</div>
				</form>

				<p class="mt-3 mb-1">
					<a href="<?php echo base_url()?>admin">Login Here</a>
				</p>
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?php echo base_url();?>/assets/admin_assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url();?>/assets/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url();?>/assets/admin_assets/dist/js/adminlte.min.js"></script>

</body>
</html>


