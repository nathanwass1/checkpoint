@extends('layout')

@section('content')


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
<br>
<br>
<br>
<h1>{{ $post->title }} </h1>

<div>{{$post->body }}</div>


<hr>
<ul>




</ul>
