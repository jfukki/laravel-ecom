@extends('master')

@section('content')

   <div class="container-fluid my-3" style="margin-top:50px !important;">
    <div class="row product-detail-main-card">
        
        <!-- product detail image area -->
        
        <div class="col-md-6">
            <img src="{{$data['gallery']}}" alt="" class="product-detail-img">
        </div>

        <!-- product detail text area -->
        <div class="col-md-6 product-detail-text-area">
            <br>
            <a href="/product">Go Back</a>
            <br>
            <br>
            <h2>{{$data['name']}}</h2>
            <hr>
            <h4>USD: {{$data['price']}}</h4>
            <hr>
            <p>Category: <b><a href="#" style="text-decoration:none;">  {{$data['category']}}</a></b></p>
            <hr>
            <br>
            <p>{{$data['description']}}</p>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <form action="/addToCart" method="POST">
                        @csrf
                     <input type="hidden" name="product_id" value="{{$data['id']}}">   
                    <button class="btn btn-danger">Add to Cart</button>
                    </form>
                </div>

                <div class="col-md-3">
                    <button class="btn btn-success">Buy Now</button>
                </div>
            </div> 
        </div>

    </div>
   </div>

@endsection