@extends('layout.layout')

@section('title')
    {{ Auth::user()->name.'\'s profile' }}
@endsection

@section('content')
    <div class="container-fluid d-flex flex-row h-100">
        <div class="container border border-2 border-info rounded-3 p-3 m-3" style="width: 60%">
            <div class="container-fluid d-flex justify-content-center align-items-center h-100">
                <h1>No programs yet.</h1>
            </div>
        </div>
        <div class="container d-flex flex-column border border-2 border-info rounded-3 p-3 m-3" style="width: 40%">
            <div class="container-fluid d-flex flex-row align-items-center border-bottom border-2 border-info p-0 p-2">
                <img class="border border-2 border-primary rounded-circle" style="width: 15%" src="{{ asset(Auth::user()->picture_path ?? 'photo/default.png') }}" alt="Profile image">
                <span class="text-dark fs-2 ms-3">{{ Auth::user()->name }}</span>
            </div>
            <div class="container-fluid h-100 border-bottom border-2 border-info p-0 mb-2 d-flex flex-column">
                <div class="row mt-2">
                    <div class="col-4">
                        <span class="text-dark fs-5">E-mail:</span>
                    </div>
                    <div class="col-8">
                        <span class="text-dark fs-5">{{ Auth::user()->email }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <span class="text-dark fs-5">Created at:</span>
                    </div>
                    <div class="col-8">
                        <span class="text-dark fs-5">{{ Auth::user()->created_at->format('Y-m-d') }}</span>
                    </div>
                </div>
            </div>
            <div class="container-fluid d-flex flex-row p-0">
                <a href="{{ route('user.edit') }}" class="btn btn-outline-primary ms-auto">Edit</a>
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <input class="btn btn-outline-danger ms-3" type="submit" value="Log Out">
                </form>
            </div>
        </div>
    </div>
@endsection