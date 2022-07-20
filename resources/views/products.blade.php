@extends('master')


@section('content')

<div class="custom-products-slider">


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

    <div class="carousel-inner">
  @foreach($products as $product)
    <div class="carousel-item {{$product['id']==27? 'active' : ''}}">
      <img src="{{$product['gallery']}}" class="d-block  slide-image" alt="...">
      <div class="carousel-caption d-none d-md-block slide-text">
        <h5>{{$product['name']}}</h5>
        <p>{{$product['price']}}</p>
      </div>
    </div>
    @endforeach
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</div>
 

<!-- Trending Products Cards -->

<div class="container">
    <div class="row">
        
        @foreach($products as $product)

            <div class="col-md-4">
                <div class="card trending-product-card" style="width: 18rem;">
                    <img src="{{$product['gallery']}}" class="card-img-top trending-product-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{Str::limit($product['name'], 16)}}</h5>
                        <p class="card-text"><b>USD:</b> {{$product['price']}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        @endforeach


    </div>
</div>



<!-- Trending Products Cards -->


@endsection