<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="assets/css/home.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- <title>Footer</title> -->
</head>

<body>
<form action="{{route('admin.post.create')}}" method="POST">
  @csrf
  <div class="container-fluid" style="padding: 50px">
    <h1><label>New Posts</label></h1>
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="">Title</label>
          <input type="text" class="form-control" id="inputTitle" placeholder="Title" name="title">
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-8">
          <label for="">Sub Title</label>
          <input type="text" class="form-control" id="inputSubTitle" placeholder="Sub Title" name="subtitle">
          @error('subtitle')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-8">
          <label for="">Author</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Author" name="author">
          @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group col-md-8">
          <label class="control-label" >Avatar</label>
          <div class="controls">
              <input type="file" style="display:none;" id="basicinput" name="avatar" class="span8 img-upload" >
              <br>
              <img style="padding: 10px 10px;
              background-color: white;
              box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
              -moz-box-shadow: 0 1px 2px rgba(34,25,25,0.4);
              -webkit-box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);" class="img-bnupload" src="{{asset('uploads/imguser/auduino.png')}}" width="50px" height="50px">
          </div>
        </div>
        <div class="form-group col-md-8">
          <label for="">Content</label>
          <textarea type="textarea" class="form-control" id="inputAddress2" placeholder="Content" name="content"></textarea>
          @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-success">Submit</button>
      <button type="submit" class="btn btn btn-info">Edit</button>
      <button type="submit" class="btn btn-danger">Delete</button>
      </div>
      @if(session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
      @endif
  </div>
</form>

  <!-- Javascript -->

  <script>
    CKEDITOR.replace('editor-vip',config);
    $('.img-bnupload').click(function(){
        $('.img-upload').click();
        //var a = $('input[type="file"]').val();
        //$(".img-bnupload").attr("src",a);
    });
    $('.img-upload').change( function(event) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
            $(".img-bnupload").fadeIn("fast").attr('src',tmppath);       
        });
  </script>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
    integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>
  <script src="assets/js/jquery.backstretch.min.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>

</html>
