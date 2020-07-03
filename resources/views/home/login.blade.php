@extends('home.master')
@section('css')
  <link type="text/css" href="{{ asset('asset/styles/login.css')}}" rel="stylesheet">
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
@endsection