@extends('master')


@section('content')

    <div class="container my-3 top-margin">
        <div class="row">
            <div class="col-md-6 offset-md-4">
                <h2>My Orders List</h2>
            </div>
        </div>


        @foreach($orders as $item)
        <div class="row my-4">
            <div class="col-md-5"><img src="{{$item->gallery}}" alt="" style="width:180px;"> </div>
            <div class="col-md-6">
                
             
                <h5>Product Name: {{$item->name}}</h5>
                <h5>Product Price: {{$item->price}}</h5>
                <h5>Product Description: </h5> <p>{{$item->description}}</p>
                <h5>Product Category: {{$item->category}}</h5>
                <hr>
                <h5>Delivery Status: {{$item->status}}</h5>
                <h5>Payment Status: {{$item->payment_status}}</h5>
                <h5>Payment Method: {{$item->payment_method}}</h5>




                             
            </div>

            <hr class="top-margin">

        </div>
        
    @endforeach

        </div>
    </div>

@endsection