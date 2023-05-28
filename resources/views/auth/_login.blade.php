@extends('auth.autentication')
@section('content')
    <div class="p-3 pt-5">
        <h3 class="text-center mb-3">Login</h3>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 d-flex justify-content-end">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="mt-5 d-flex justify-content-center" style="font-size: .85rem">
            <p>Don't have an account yet? <a href="{{ route('register') }}" class="text-decoration-none fw-semibold">create
                    a new
                    account</a> </p>
        </div>
    </div>
@endsection
