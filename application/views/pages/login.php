 <!-- MAIN -->
 <main class="site-main site-login">
 	<div class="container">
 		<ol class="breadcrumb-page">
 			<li><a href="#">Home </a></li>
 			<li class="active"><a href="#">Login</a></li>
 		</ol>
 	</div>
 	<div class="customer-login">
 		<div class="container">
 			<div class="row">
 				<div class="col-md-3"></div>
 				<div class="col-md-6 col-sm-6">
 					<h3 class="text-center">Log in to your account</h3><br>
 					<?php
                                $message = $this->session->userdata('customer_password_error_message');
                                if ($message) {
                                    ?>
                                    <div class="error-box">
                                        <div class="alert alert-warning">
                                            <?php
                                            echo $message;
                                            $this->session->unset_userdata('customer_password_error_message');
                                            ?>
                                        </div>
                                    </div>
                                    <?php 
                                }
                                ?>

                                <?php
                                $message = $this->session->userdata('session_message');
                                if ($message) {
                                    ?>
                                    <div class="error-box">
                                        <div class="alert alert-warning">
                                            <?php
                                            echo $message;
                                            $this->session->unset_userdata('session_message');
                                            ?>
                                        </div>
                                    </div>
                                    <?php 
                                }
                                ?>

                                <?php
                                $message = $this->session->userdata('customer_id_error');
                                if ($message) {
                                    ?>
                                    <div class="error-box">
                                        <div class="alert alert-warning">
                                            <?php
                                            echo $message;
                                            $this->session->unset_userdata('customer_id_error');
                                            ?>
                                        </div>
                                    </div>
                                    <?php 
                                }
                                ?>
                                
 					<form action="<?php echo base_url()?>check-customer-login" method="post">
 						<div class="form-group">
 							<input type="email" class="form-control" name="customer_email" placeholder="Enter email">
 						</div>
 						<div class="form-group">
 							<input type="password" class="form-control" name="customer_password" placeholder="Password">
 						</div>
 						<div class="form-check">
 							<input type="checkbox" class="form-check-input" id="Remember">
 							<label class="form-check-label" for="Remember">Remember Me</label>
 							<a href="#" class="forgot-password">Forgotten password?</a>
 						</div> <br>

 						<button type="submit" class="btn btn-primary">Submit</button>
 					</form>
 				</div>
 				<div class="col-md-3"></div>
 			</div>
 		</div>
 	</div>
</main><!-- end MAIN -->