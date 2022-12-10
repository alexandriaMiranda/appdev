<?= $this->include('include/top')?>
<?= $this->include('include/header')?>
<body>
	<!-- Page Content -->
	<div class="content">
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-md-8 offset-md-2">
					
					<!-- Account Content -->
					<div class="account-content">
						<div class="row align-items-center justify-content-center">
							<div class="col-md-7 col-lg-6 login-left">
								<img src="<?=base_url()?>/assets/img/login-banner.png" class="img-fluid" alt="Login Banner">	
							</div>
							<div class="col-md-12 col-lg-6 login-right">
								<div class="login-header">
									<h3>Forgot Password?</h3>
									<p class="small text-muted">Enter your email to get a password reset link</p>
								</div>
								
								<?php $errors = session()->getFlashdata('errors'); ?>
                                    <?php if (!empty($errors)) : ?>
                                        <div class="alert alert-danger">
                                            <ul class="list-unstyled">
                                                <?php foreach ($errors as $error) : ?>
                                                    <li><?php echo $error ?></li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                    <?php endif ?>

                                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashdata('error'); ?>
                                        </div>
                                    <?php endif ?>


                                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                        <div class="alert alert-success">
                                            <?= session()->getFlashdata('success'); ?>
                                        </div>
                                    <?php endif ?>

								<!-- Forgot Password Form -->
								<form action="<?= base_url('auth/recovery-password') ?>" method="post">
									<div class="form-group form-focus">
										<input type="email" class="form-control floating" name="email" id="email" value="<?= set_value('email') ?>">
										<label class="focus-label">Email</label>
									</div>
									<?= @csrf_field() ?>
									<div class="text-right">
										<a class="forgot-link" href="<?= base_url('/auth/login') ?>">Remember your password?</a>
									</div>
									<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Reset Password</button>
								</form>
								<!-- /Forgot Password Form -->					
							</div>
						</div>
					</div>
					<!-- /Account Content -->		
				</div>
			</div>
		</div>
	</div>		
	<!-- /Page Content -->
	<?= $this->include('include/end')?>
</body>