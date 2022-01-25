@extends('app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link disabled" style="color: black;"><h4> Welcome to <?php echo Auth::user()->name ?></h4></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link disabled" style="color: black;"><h4><?php echo Auth::user()->email ?></h4></a>
        </li>
        <div style="margin-left:600px;">
        <a href="{{ route('logout') }}" class="btn btn-danger">Sign-out</a>
         </div>
      </ul>
    </div>
  </div>
</nav>
<div class="conatiner">
<center>You are logged in</center>
</div>
   
@yield('content')
@endsection