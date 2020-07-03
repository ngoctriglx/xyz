
<?php $__env->startSection('css'); ?>
  <link type="text/css" href="<?php echo e(asset('asset/styles/login.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','Login'); ?>
<?php $__env->startSection('content'); ?>
<form  action="/action_page.php" method="post">
    
    <div class="container_login">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container_login" style="background-color:#f1f1f1">
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    <div class="container_login">
        <a href="<?php echo e(url('/user/loginfacebook/facebook')); ?>">LoginFacebook</a>
        <a href="<?php echo e(url('/user/logingoogle/google')); ?>">LoginGmail</a>
    </div>
    <?php if(session('error')): ?>
        <div class="alert alert-danger">
          <?php echo e(session('error')); ?>

        </div>
    <?php endif; ?>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\blog\resources\views/home/login.blade.php ENDPATH**/ ?>