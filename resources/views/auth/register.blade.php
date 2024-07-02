@extends('layout.layout')

@section('title')
    Registration
@endsection

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="container border border-2 border-info rounded-3 p-3 w-50">
            <div class="container-fluid text-center">
                <h1 class="text-primary mb-5">Register</h1>
            </div>
            <form action="{{ route('auth.store') }}" method="POST">
                @csrf
                @error('name')
                    <span class="text-danger fs-6">{{ $message }}</span>
                @enderror
                <input class="form-control my-2" name="name" type="text" placeholder="Name" value="{{ old('name') }}">
                @error('email')
                    <span class="text-danger fs-6">{{ $message }}</span>
                @enderror
                <input class="form-control my-2" name="email" type="email" placeholder="E-mail" value="{{ old('email') }}">
                @error('password')
                    <span class="text-danger fs-6">{{ $message }}</span>
                @enderror
                <input class="form-control my-2" name="password" type="password" placeholder="Password">
                <input class="form-control my-2" name="password_confirmation" type="password" placeholder="Password confirmation">
                <div class="container-fluid text-center">
                    <input class="btn btn-outline-success mt-3" type="submit" value="Sign Up">
                </div>
            </form>
        </div>
    </div>
@endsection