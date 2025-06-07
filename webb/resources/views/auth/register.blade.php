@extends('base')
@section('title', 'Register')

@section('content')
<div class="centered-div">
    <div class="container" style="max-width: 400px; width: 100%;">
        <div class="card shadow-sm">
            <div class="card-header text-center">
                <h4 class="mb-0"><strong>Register</strong></h4>
            </div>

            @if(Session::has('success'))
            <div class="alert alert-success m-3">{{ session('success') }}</div>
            @endif

            @if(Session::has('error'))
            <div class="alert alert-danger m-3">{{ session('error') }}</div>
            @endif

            <div class="card-body">
                <form method="post" action="{{ route('auth.register.submit') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                        @error('password') <div class="text-danger small">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>

                <div class="mt-3 text-center">
                    <a href="{{ route('login') }}">Already have an account? Login here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
