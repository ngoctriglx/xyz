
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
	<title>Login</title>
</head>
<body>
	<div class="login_form_wrapper">
		<div class="container">
			<div class="row" id="long-wrap">
				<div class="col-md-8 col-md-offset-2">
					<div class="login_wrapper">
						<form action="<?php echo e(route('user.post.login')); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<div class="formsix-pos">
							<div class="form-group i-email"> <input type="email" name="email" class="form-control" required="" id="email2" placeholder="Email Address *"> </div>
						</div>
						<div class="formsix-e">
							<div class="form-group i-password"> <input type="password" name="password" class="form-control" required="" id="password2" placeholder="Password *"> </div>
						</div>
						<div class="login_remember_box"> <label class="control control--checkbox">Remember me <input type="checkbox"> <span class="control__indicator"></span> </label> <a href="#" class="forget_password"> Forgot Password </a> </div>
						
						<div class="login_btn_wrapper"><button type="submit">Login</button></div>
						</form>
						<div class="bulkhead"></div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> <a href="<?php echo e(url('/user/loginfacebook/facebook')); ?>" class="btn btn-primary facebook"> <span>Login with Facebook</span> <i class="fa fa-facebook"></i> </a> </div>
							<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> <a href="<?php echo e(url('/user/logingoogle/google')); ?>" class="btn btn-primary google-plus"> Login with Google <i class="fa fa-google-plus"></i> </a> </div>
						</div>
						<?php if(session('error')): ?>
							<div class="alert alert-danger">
							<?php echo e(session('error')); ?>

							</div>
    					<?php endif; ?>
					</div> 
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html><?php /**PATH E:\xampp\htdocs\blog\resources\views/home/login.blade.php ENDPATH**/ ?>