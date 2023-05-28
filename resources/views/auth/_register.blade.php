@extends('auth.autentication')
@section('content')
    <div class="p-3">
        <h3 class="text-center mb-3">Register</h3>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="usename" class="form-label">Username</label>
                <input type="text" value="{{ old('username') }}" name="username" class="form-control" id="username">
                @error('username')
                    <div class="text-danger mt-1" style="font-size: .75rem">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="name">
                @error('name')
                    <div class="text-danger mt-1" style="font-size: .75rem">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email"
                    aria-describedby="emailHelp">
                @error('email')
                    <div class="text-danger mt-1" style="font-size: .75rem">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" value="{{ old('password') }}" name="password" class="form-control" id="password">
                @error('password')
                    <div class="text-danger mt-1" style="font-size: .75rem">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <div class="mt-4 d-flex justify-content-center" style="font-size: .85rem">
            <p>already have an account? <a href="{{ route('login') }}" class="text-decoration-none fw-semibold">login</a>
            </p>
        </div>
    </div>
@endsection
