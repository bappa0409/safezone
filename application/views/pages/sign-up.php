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
 				<div class="col-sm-6">
 					<h5 class="title-login">Log in to your account</h5>
 					<p class="p-title-login">Wellcome to your account.</p>
 					<form class="login" method="post">
 						<p class="form-row form-row-wide">
 							<label>Username or Email Address:<span class="required"></span></label>
 							<input type="text" value="" name="username" placeholder="Type your username or email address" class="input-text">
 						</p>
 						<p class="form-row form-row-wide">
 							<label>Password:<span class="required"></span></label>
 							<input type="password" name="password" placeholder="************" class="input-text">
 						</p>
 						<ul class="inline-block">
 							<li><label class="inline" ><input type="checkbox"><span class="input"></span>Remember me</label></li>
 						</ul>
 						<a href="#" class="forgot-password">Forgotten password?</a>
 						<p class="form-row">
 							<input type="submit" value="Login" name="Login" class="button-submit">
 						</p>                              
 					</form>
 				</div>
 				<div class="col-sm-6 border-after">
 					<h5 class="title-login">Great an account</h5><br>
 					<form action="<?php echo base_url()?>insert-sign-up" class="register" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fist name<span class="required">*</span></label>
                                    <input type="text" name="customer_fname" placeholder="Fist name" class="form-control" value="<?php echo set_value('customer_fname')?>">
                                    <span class="text-danger"><?php echo form_error('customer_fname'); ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last name<span class="required">*</span></label>
                                    <input type="text" name="customer_lname" placeholder="Last name" class="form-control" value="<?php echo set_value('customer_lname')?>">
                                    <span class="text-danger"><?php echo form_error('customer_lname'); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email Address<span class="required">*</span></label>
                                    <input type="email" name="customer_email" placeholder="Email address" class="form-control" value="<?php echo set_value('customer_email')?>">
                                    <span class="text-danger"><?php echo form_error('customer_email'); ?></span>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li><label class="inline" ><input type="checkbox" name="newsletter"><span class="input"></span>Sign Up for Newsletter</label></li>
                        </ul>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="customer_password" class="form-control">
                                    <span class="text-danger"><?php echo form_error('customer_password'); ?></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirm_password" class="form-control">
                                    <span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
                                </div>
                            </div>
                        </div>
                        
                        
                        <p class="form-row">
                            <input type="submit" value="Submit" name="Submit" class="button-submit swalDefaultSuccess">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main><!-- end MAIN -->