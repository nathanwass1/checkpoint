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
<h1>{{ $review->title }} </h1>

<div>{{ $review->body }}</div>


<hr>
<ul>

@foreach ($review->adjustments as $user)
    <li>{{ $user->email }} - {{ $user->pivot->updated_at->diffForHumans() }}</li>

@endforeach
</ul>



















@endsection