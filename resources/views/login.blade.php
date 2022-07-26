@extends('master')

@section("content")

<div class="container my-3 custom-login">
    <div class="row">
        <div class="col-md-4 offset-md-4 login-form-custom">
            <h3>Login Here</h3>

            <form action="login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" n class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
               
                <button type="submit" class="btn btn-success">Login</button>
             </form>
        </div>
    </div>
</div>

@endsection