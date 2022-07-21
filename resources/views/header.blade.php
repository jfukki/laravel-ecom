<?php
 use App\Http\Controllers\ProductController;

 if(session()->has('user')){
  
  $total = ProductController::cartItem();
  
 }
 else{
  $total = "0";
 } 


?>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container">
    <a class="navbar-brand" href="#">Ps-eCom</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Orders</a>
        </li>
         
        <li>
            <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </li>
        
      </ul>



      <ul class="navbar-nav nav-right">
      @if(Session::has('user'))  
        <li class="nav-item">
          <a class="nav-link" href="/cartList">Cart({{$total}})</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" ></a>
        </li>
        @endif



      

        <li class="nav-item dropdown">
        @if(Session::has('user'))
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Orders</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
           
          </ul>
          @else
          <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
         </li>
           @endif
        </li>

</ul>
      
      
    </div>
  </div>
</nav>

  