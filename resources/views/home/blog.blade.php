@extends('home.master')
@section('title','Du lịch bốn phương')
@section('css')
  <link href="{{asset('css/blog.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

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
        @foreach ($blog as $val)
          <div class="col-sm card-items">
            <div class="card" style="width: 20rem;">
              <img class="card-img-top" src="https://images.unsplash.com/photo-1592218636432-1fcfb03707dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">{{$val->title}}</p>
                <a href="{{route('home.get.blogdetail',$val->title)}}"><small>Xem thêm</small></a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div>{{ $blog->links() }}</div>
  @endsection
  @section('script')
  
  @endsection