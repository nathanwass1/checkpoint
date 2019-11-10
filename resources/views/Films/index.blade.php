@extends('layout')

@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
        @endauth
                </div>
@endif
@section('content')    
<div class="content">
<H1>Films</H1>

@foreach($Films as $Film)
    <li>
        <a href="/Films/{{ $Film->id }}">
        {{ $Film->Title }} 
    </li>
@endforeach


@endsection
@if (session('message'))
    <p>{{ session('message') }}</p>
@endif
</div>
