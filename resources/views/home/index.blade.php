@extends('layouts.app')

@section('content')
    @auth
        <div class="bg-light p-5 rounded text-center">
            <h1 class="text-center">Dashboard</h1>
            <p>Only authenticated user can enter this page.</p>
        </div>
    @endauth
    @guest
        <div class="bg-light p-5 rounded text-center">
            <h1 class="text-center">Home Page</h1>
            <p>You are in home page.</p>
        </div>
    @endguest
@endsection
