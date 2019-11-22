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
<H1>Posts</H1>

@foreach($posts as $post)
    <li>
        <a href="/posts/{{ $post->id }}">
        {{ $post->title }} 
    </li>
@endforeach







@endsection