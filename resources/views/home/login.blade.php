{{--  @extends('home.master')
@section('css')
  <link type="text/css" href="{{ asset('css/login.css')}}" rel="stylesheet">
@endsection
@section('title','Login')
@section('content')
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
        <a href="{{url('/user/loginfacebook/facebook')}}">LoginFacebook</a>
        <a href="{{url('/user/logingoogle/google')}}">LoginGmail</a>
    </div>
    @if(session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
    @endif
  </form>
@endsection  --}}
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/home/login.css')}}">
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
						<form action="{{route('user.post.login')}}" method="POST">
						@csrf
						<div class="formsix-pos">
							<div class="form-group i-email"> <input type="email" name="email" class="form-control" required="" id="email2" placeholder="Email Address *"> </div>
						</div>
						<div class="formsix-e">
							<div class="form-group i-password"> <input type="password" name="password" class="form-control" required="" id="password2" placeholder="Password *"> </div>
						</div>
						<div class="login_remember_box"> <label class="control control--checkbox">Remember me <input type="checkbox"> <span class="control__indicator"></span> </label> <a href="#" class="forget_password"> Forgot Password </a> </div>
						{{-- <div class="login_btn_wrapper"> <a href="" class="btn btn-primary login_btn" ><button type="submit" class="btn btn-primary login_btn">Login</button> </a> </div>
						<div><input type="submit" ></div> --}}
						<div class="login_btn_wrapper"><button type="submit">Login</button></div>
						</form>
						<div class="bulkhead"></div>
						<div class="row">
							<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> <a href="{{url('/user/loginfacebook/facebook')}}" class="btn btn-primary facebook"> <span>Login with Facebook</span> <i class="fa fa-facebook"></i> </a> </div>
							<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6"> <a href="{{url('/user/logingoogle/google')}}" class="btn btn-primary google-plus"> Login with Google <i class="fa fa-google-plus"></i> </a> </div>
						</div>
						@if(session('error'))
							<div class="alert alert-danger">
							{{ session('error') }}
							</div>
    					@endif
					</div> 
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>