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
<div class="content">
<h1>{{ $post->title }} </h1>

{{$post->body }} </div>
<div class="content">

@if ($post->Comments->count())
<h2>Comments</h2>


<div> @foreach($post->Comments as $comment)
    <li>
        
        {{ $comment->title }}  <br>
        {{ $comment->body }}
    </li>
@endforeach</div>


@endif

<div>



</div>



</div>
