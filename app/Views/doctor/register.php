<?= $this->include('doctor/include/top')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="<?= base_url()?>/admin-assets/img/logo-white.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>

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

								<!-- Form -->
								 <form action="<?= base_url('admin/register') ?>" method="post">
									<div class="form-group">
										<input type="text" name="name" class="form-control floating" value="<?= set_value('name') ?>" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="text" name="email" class="form-control floating" value="<?= set_value('email') ?>" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="password" name="password" class="form-control floating" value="<?= set_value('password') ?>" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="repassword" class="form-control floating" value="<?= set_value('repassword') ?>" placeholder="Confirm password">
									</div>
									<?= @csrf_field() ?>
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" type="submit">Register</button>
									</div>
								</form>
								<!-- /Form -->								
								<div class="text-center dont-have">Already have an account? <a href="<?= base_url()?>/admin/login">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('doctor/include/end')?>
		<!-- /Main Wrapper --> 
</body>
</html>