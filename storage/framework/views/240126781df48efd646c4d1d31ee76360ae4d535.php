
<?php $__env->startSection('title','Du lịch bốn phương'); ?>
<?php $__env->startSection('css'); ?>
  <link href="<?php echo e(asset('css/blog.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  <div>
    <div class="wrap-container">
      <div class="wrap-information">
        <h1>Blog</h1>
          <code>
            You have found yet another learning space 
            in this universe where you got a chance to 
            learn something useful along with me. 
            ome let learn & explore the world together 😇
          </code>
      </div>
      <div class="social">
        <button class="btn btn-info btn-sm fb" type="button">
          <i class="fab fa-facebook "></i>
            &#160;Follow
        </button>
          <a class="followers" href="https://www.facebook.com/">40k</a>
        <button class="btn btn-secondary btn-sm " type="button">
          <i class="fab fa-twitter"></i>
          &#160;Follow
        </button>
          <a class="followers" href="https://www.facebook.com/">30k</a>
        <button class="btn btn-danger btn-sm" type="button">
          <i class="fab fa-youtube"></i>
          &#160;Youtube
        </button>
        <a class="followers" href="https://www.facebook.com/">20k</a>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row wrap-cards">
        <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-sm card-items">
            <div class="card" style="width: 20rem;">
              <img class="card-img-top" src="https://images.unsplash.com/photo-1592218636432-1fcfb03707dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Card image cap">
              <div class="card-body">
                <p class="card-text"><?php echo e($val->title); ?></p>
                <a href="<?php echo e(route('home.get.blogdetail',$val->title)); ?>"><small>Xem thêm</small></a>
              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
  <div><?php echo e($blog->links()); ?></div>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('script'); ?>
  
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\blog\resources\views/home/blog.blade.php ENDPATH**/ ?>