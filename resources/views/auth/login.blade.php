@extends('layout.layout')

@section('title')
    Log In
@endsection

@section('content')
<div class="container d-flex justify-content-center">
    <div class="container border border-2 border-info rounded-3 p-3 w-50">
        <div class="container-fluid text-center">
            <h1 class="text-primary mb-5">Log In</h1>
        </div>
        <form action="{{ route('auth.authenticate') }}" method="POST">
            @csrf
            @error('email')
                    <span class="text-danger fs-6">{{ $message }}</span>
            @enderror
            <input class="form-control my-2" name="email" type="email" placeholder="E-mail" value="{{ old('email') }}">
            @error('password')
                <span class="text-danger fs-6">{{ $message }}</span>
            @enderror
            <input class="form-control my-2" name="password" type="password" placeholder="Password">
            <div class="container-fluid text-center">
                <input class="btn btn-outline-success mt-3" type="submit" value="Sign In">
            </div>
        </form>
    </div>
</div>
@endsection