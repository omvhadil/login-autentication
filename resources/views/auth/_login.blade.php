@extends('auth.autentication')
@section('content')
    <div class="p-lg-3 pt-lg-5 p-4">
        <h1 class="text-center mb-3">Login</h1>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email"
                    aria-describedby="emailHelp">
                @error('email')
                    <div class="text-danger mt-1" style="font-size: .76rem">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" value="{{ old('password') }}" name="password" class="form-control" id="password">
                @error('password')
                    <div class="text-danger mt-1" style="font-size: .75rem">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 d-flex justify-content-end">
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="mt-5 d-flex justify-content-center" style="font-size: .85rem">
            <p>Don't have an account yet? <a href="{{ route('register') }}" class="text-decoration-none fw-semibold">create
                    a new
                    account</a> </p>
        </div>
    </div>
@endsection
