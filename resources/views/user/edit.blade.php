@extends('layout.layout')

@section('title')
    Profile update
@endsection

@section('content')
    <div class="container border border-2 border-info rounded-3 p-3 w-50">
        <div class="container-fluid text-center">
            <h1 class="text-primary">Profile edit</h1>
        </div>
        <form action="{{ route('user.update') }}" method="POST">
            @csrf


            <div class="container-fluid d-flex flex-column align-items-center p-0">
                <label class="border border-0 rounded-circle" style="width: 15%" for="file">
                    <img class="border border-2 border-primary rounded-circle mw-100" src="{{ asset(Auth::user()->picture_path ?? 'photo/default.png') }}" alt="Picture">
                </label>
                <input id="file" class="form-control my-2" type="file" style="display: none;" name="picture" accept="image/png, image/jpeg">
            </div>

            @error('name')
                <span class="text-danger fs-6">{{ $message }}</span>
            @enderror
            <input class="form-control my-2" type="text" name="name" placeholder="New name" value="{{ old('name') ?? Auth::user()->name }}">
            <div class="container-fluid d-flex flex-row justify-content-center p-0 mt-3">
                <input class="btn btn-outline-success mx-2" type="submit" value="Save">
                <a class="btn btn-outline-danger mx-2" href="{{ route('user.profile') }}">Discard</a>
            </div>
        </form>
    </div>
@endsection