<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
    $total=ProductController::cartitem();
}
?>
<head>
<style>
  li a:hover:not(.active) 
    {
      background-color: #111;
    }
</style>
</head>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand font" href="/"><b> E-Comm </b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="font"><a href="/"><b> Home</b></a></li>
        <li class="font"><a href="/myorders"><b>Orders</b></a></li>
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box font" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default font"><b> Search </b></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="nav-item font" href="/cartlist"><b> Cart({{$total}}) </b></a></li>
        @if(Session::has('user'))
        <li class="dropdown">
          <a class="dropdown-toggle font" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-item font" href="/logout"><b> Logout </b></a></li>
          </ul>
        </li>
        @else
        <li><a href="/login">Login</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>