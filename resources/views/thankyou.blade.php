@extends('master')

@section('content')

<div class="container my-3">
    <div class="row">
        <div class="col-md-6 offset-md-4">
            <h3>Thank  {{Session::get('user')['name']}} for placing Order.</h3>
        </div>
    </div>
</div>


@endsection