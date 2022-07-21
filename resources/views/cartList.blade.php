@extends('master')
@section('content')

    <div class="container my-3 top-margin">
        <div class="row ">
            <div class="col-md-4 offset-md-4 " >
            @if(Session::has('user'))
            <h2>{{Session::get('user')['name']}} Cart-List</h2>
            @else
            <h2>Your Cart-List</h2>
            @endif
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2 my-custom-cart-list">

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Unit Qyt</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                        <th scope="row"><img src="{{$product->gallery}}" alt="" class="cartList-img"></th>
                        <td>{{$product->name}}</td>
                        <td>-</td>
                        <td>{{$product->price}}</td>
                        <td> <a href="/removecart/{{$product->cart_id}}"><button class="btn btn-warning btn-sm">Remove</button></a> </td>

                        </tr>
                        
                        @endforeach
                         
                       </tbody>
                </table>

            </div>
        </div>
    </div>



@endsection