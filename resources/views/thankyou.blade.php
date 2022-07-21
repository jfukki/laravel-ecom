@extends('master')

@section('content')

<div class="container my-3">
    <div class="row">
        <div class="col-md-8 offset-md-3 my-4">
            <h3>Thank You {{Session::get('user')['name']}} for placing Order!!</h3>
        </div>
    </div>
</div>


@endsection