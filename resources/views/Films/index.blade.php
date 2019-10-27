<!DOCTYPE html>
<html>
<head>
@extends('layout')
</head>
<body>

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
    
<H1>Films</H1>
<ul>
@foreach($Films as $Film)
    <li>
        <a href="/Films/{{ $Film->id }}">
        {{ $Film->Title }} 
    </li>
@endforeach
</ul>

</body>
</html>