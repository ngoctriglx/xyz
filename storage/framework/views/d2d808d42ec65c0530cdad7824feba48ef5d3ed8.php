<!DOCTYPE html>
<html lang="en">
    <?php 
      use App\Info;
      use Illuminate\Support\Facades\Auth;
      use Illuminate\Support\Facades\DB;
      if(Auth::check())
      $info = Info::where('user_id',Auth::User()->id)->get();
    ?>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $__env->yieldContent('title'); ?></title>
 
    <link href="<?php echo e(asset('css/header.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/footer.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/profile.css')); ?>" rel="stylesheet" type="text/css">
    <?php echo $__env->yieldContent('css'); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
    
</head>
<body>
  
  <div>
    <nav class="master-nav">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a class="active" href="<?php echo e(route('home.get.home')); ?>"><i class="fas fa-home"></i></a></li>
        <li><a href="<?php echo e(route('home.get.blog')); ?>"><i class="fas fa-pencil-alt"></i></a></li>
        <li><a href="#"><i class="fas fa-headphones"></i></a></li>
        <li><a href="#"><i class="fas fa-sun"></i></a></li>
        <?php if(Auth::check()): ?>
        <li data-toggle="modal" data-target="#myModal"><img class="profile"
          
          alt="interactive-avatar" />
        </li>
        <?php else: ?>
          <li><a href=""><img class="profile" src="<?php echo e(URL::asset('/uploads/imguser/user.jpg')); ?>" alt=""></a></li>
          
        <?php endif; ?>
      </ul>
    </nav>

    <div class="container">
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="width: 30%">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Profile</h4>
              <button type="button" class="close" id="removeImage" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body long-modal">
              <div class="long-card" style="width: 30rem;">
                <div class="avatar-upload">
                  <div class="avatar-edit">
                    <input class="long-input" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"><i class="fa fa-cog"></i></label>
                  </div>
                  <div class="avatar-preview">
                    <div class="long-image" id="imagePreview"
                      
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  
                  
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                  <p>example@example.com</p>
                  <p><button class="button">Contact</button></p>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button onclick="logout()" type="button"  class="btn btn-danger" data-dismiss="modal">Logout</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <?php echo $__env->yieldContent('content'); ?>

  <div>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <h1>Point</h1>
            <hr />
            <p>Nguyễn Thái Long</p>
            <p>Nguyễn Hoài Nam</p>
            <p>Trần Ngọc Trí</p>
          </div>
          <div class="col-md-2">
            <h3>Lorem....</h3>
            <span>
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
              Phasellus felis mi, euismod
              rhoncus dictum eu, tempor et
              purus. Integer interdum feugiat
            </span>
          </div>
          <div class="col-md-2">
            <h3>Lorem....</h3>
            <span>
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
              Phasellus felis mi, euismod
              rhoncus dictum eu, tempor et
              purus. Integer interdum feugiat
            </span>
          </div>
          <div class="col-md-2">
            <h3>Lorem....</h3>
            <span>
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
              Phasellus felis mi, euismod
              rhoncus dictum eu, tempor et
              purus. Integer interdum feugiat
            </span>
          </div>
          <div class="col-md-4">
            <h3>FOLLOW BY EMAIL</h3>
            <div class="input-group mb-2 mt-2">
              <input style="width: 70%" type="text" class="form-control" placeholder="Email address...">
              <button class="btn btn-warning" type="button">Submit</button>
            </div>
            <span>
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit.
              Phasellus felis mi, euismod
              rhoncus dictum eu, tempor et
              purus. Integer interdum feugiat
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
      integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
      integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
      crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>\
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/home.master.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html><?php /**PATH E:\xampp\htdocs\blog\resources\views/home/master.blade.php ENDPATH**/ ?>