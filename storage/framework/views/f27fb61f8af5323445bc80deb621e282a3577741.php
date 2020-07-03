
<?php $__env->startSection('css'); ?>
  <link type="text/css" href="<?php echo e(asset('asset/styles/blogdetail.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__env->startSection('title',$val->title); ?>  
<?php $__env->startSection('content'); ?>
  <div>
    <div class="wrap-container">
      <div class="row">
        <div class="col-8">
          <hr />
          <div class="wrap-image">
            <img
              src="https://images.unsplash.com/photo-1592252687443-08df10cd260c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
              alt="detail-blog" />
          </div>
          <div class="wrap-title">
            <span class="icon-title">
              <strong>#<?php echo e($val->id); ?></strong><code>Travel</code>
            </span>
            <div class="text-title">
              <h2><?php echo e($val->title); ?></h2>
            </div>
          </div>
          <h6>By: <?php echo e($val->author); ?> Cập nhập ngày: <?php echo e($val->updated_at); ?></h6>
          <hr />
          <div class="start-content">
            <span>
              <?php echo e($val->sub_title); ?>

            </span>
          </div>
          <div class="title-blog-detail">
            <h2><span>Lorem Ipsum Lorem Ipsum </span></h2>
          </div>
          <div class="tile-content">
            <strong> #1 </strong> _Lorem Ipsum Lorem Ipsum
          </div>
          <hr class="hr-content" />
          <div class="image-content">
            <img
              src="https://images.unsplash.com/photo-1592252687443-08df10cd260c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
              alt="image content" />
          </div>
          <div class="wrap-content">
            <p>
              {`Lorem Ipsum is simply dummy text
              of the printing and typesetting industry.
              `}
            </p>
            <p>
              {`Lorem Ipsum is simply dummy text
              of the printing and typesetting industry.
              `}
            </p>
            <p>
              {`Lorem Ipsum is simply dummy text
              of the printing and typesetting industry:`}
            </p>
            <ul>
              <li>
                <strong>Lorem Ipsum is simply dummy text</strong><br />
                {`Lorem Ipsum is simply dummy text`}
              </li>
              <li>
                <strong>Lorem Ipsum is simply dummy text</strong><br />
                {`Lorem Ipsum is simply dummy text`}
              </li>
              <li>
                <strong>Lorem Ipsum is simply dummy text</strong>
                <div class="wrap-card-content">
                  <div class="row wrap-cards">
                    <div class="col-sm card-items">
                      <div class="card" style="width: 15rem;">
                        <img class="card-img-top"
                          src="https://images.unsplash.com/photo-1592218636432-1fcfb03707dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                          alt="Card image cap">
                      </div>
                    </div>
                    <div class="col-sm card-items">
                      <div class="card" style="width: 15rem;">
                        <img class="card-img-top"
                          src="https://images.unsplash.com/photo-1592218636432-1fcfb03707dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                          alt="Card image cap">
                      </div>
                    </div>
                    <div class="col-sm card-items">
                      <div class="card" style="width: 15rem;">
                        <img class="card-img-top"
                          src="https://images.unsplash.com/photo-1592218636432-1fcfb03707dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                          alt="Card image cap">
                      </div>
                    </div>
                  </div>
                </div>
                <p> {`This is the market square that is deemed as the largest in Europe at roughly 40,000 m2! The
                  landmark highlights of this place would be:`} </p>
                <ul>
                  <li>
                    <strong> {`Lorem Ipsum is simply dummy text-`} </strong>
                    {`Lorem Ipsum is simply dummy text`}
                  </li>
                  <li>
                    <strong> {`Lorem Ipsum is simply dummy text-`} </strong>
                    {`Lorem Ipsum is simply dummy text`}
                  </li>
                  <li>
                    <strong> {`Lorem Ipsum is simply dummy text-`} </strong>
                    {`Lorem Ipsum is simply dummy text`}
                  </li>
                  <li>
                    <strong> {`Lorem Ipsum is simply dummy text-`} </strong>
                    {`Lorem Ipsum is simply dummy text`}
                  </li>
                  <div class="wrap-quote">
                    <hr class="hr-quote" />
                    <div class="quote">
                      <i class="fas fa-quote-left"></i>
                      <code>
                        {`Lời nhắn.`}
                      </code>
                    </div>
                  </div>
                </ul>
              </li>
            </ul>
            </WrapContentStyle>
          </div>

          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form action="" method="POST">
                
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <textarea class="form-control" rows="3" name="content" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary" >Submit</button>
              </form>
            </div>
          </div>

          <div class="wrap-comment">
            <h2>2 COMMENT</h2>
            <div class="wrap-avatar-comment">
              <div>
                <img class="avatar-comment"
                  src="https://images.unsplash.com/photo-1587613866780-23b903d3d97a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=375&q=80"
                  alt="avatar-comment" />
                <small>user1</small>
                <div class="arrow_box">
                  "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...""
                  <span><i class="fas fa-reply"></i>&#160;<a href="#">REPLY</a></span>
                </div>
              </div>
              <div>
                <img class="avatar-comment"
                  src="https://images.unsplash.com/flagged/photo-1585685642120-3716d58f7400?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                  alt="avatar-comment" />
                <small>user2</small>
                <div class="arrow_box">
                  "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...""
                  <span><i class="fas fa-reply"></i>&#160;<a href="#">REPLY</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-4">
          <div class="interactive">
            <div>
              <h2>SUBSCRIBE</h2>
              <div class="wrap-avatar-square">
                <img class="avatar-square"
                  src="https://images.unsplash.com/photo-1592218636432-1fcfb03707dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                  alt="interactive-avatar" />
                <div class="child">
                  <code>Viet Nam Travel</code>
                  <button><i class="fab fa-youtube">&nbsp;YouTube</i></button>
                  <div class="followers"><a href="/">40k</a></div>
                </div>
              </div>
            </div>




            <div>
              <h2>ABOUT</h2>
              <div class="wrap-avatar-cycler">
                <img class="avatar-cycler"
                  src="https://images.unsplash.com/photo-1592252687443-08df10cd260c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                  alt="interactive-avatar" />
                <span>
                  {`Hey there! I am Aileen Adalid.
                  At 21, I quit my corporate job in
                  the Philippines to pursue my dreams.
                  Today, I am a successful digital nomad
                  (entrepreneur, travel writer, & vlogger)
                  living a sustainable travel lifestyle.`}
                </span>
                <span>
                  {`My mission? To show you how it is
                  absolutely possible to create a life
                  of travel too (no matter the odds),
                  and I will help you achieve that through
                  my detailed travel guides, adventures,
                  resources, tips, and MORE!`}
                </span>
              </div>
            </div>
            <div>
              <h2>INSTAGRAM</h2>
              <div class="interactive-instagram">
                <div class="row wrap-cards">
                  <div class="col-6 card-items">
                    <div class="card" style="width: 10rem; border: none;">
                      <img class="card-img-top"
                        src="https://images.unsplash.com/photo-1592218636432-1fcfb03707dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        alt="Card image cap">
                    </div>
                  </div>
                  <div class="col-6 card-items">
                    <div class="card" style="width: 10rem; border: none;">
                      <img class="card-img-top"
                        src="https://images.unsplash.com/photo-1592218636432-1fcfb03707dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        alt="Card image cap">
                    </div>
                  </div>
                  <div class="col-6 card-items">
                    <div class="card" style="width: 10rem; border: none;">
                      <img class="card-img-top"
                        src="https://images.unsplash.com/photo-1592218636432-1fcfb03707dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        alt="Card image cap">
                    </div>
                  </div>
                  <div class="col-6 card-items">
                    <div class="card" style="width: 10rem; border: none;">
                      <img class="card-img-top"
                        src="https://images.unsplash.com/photo-1592218636432-1fcfb03707dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        alt="Card image cap">
                    </div>
                  </div>
                  <div class="button-instagram">
                    <button type="button" class="btn btn-primary"><i class="fab fa-instagram"></i>&nbsp;Follow
                      Instagram</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->startSection('script'); ?>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
  
  
  <script src="assets/js/jquery.backstretch.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/scripts.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\blog\resources\views/home/blogdetail.blade.php ENDPATH**/ ?>