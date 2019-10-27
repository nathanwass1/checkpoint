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
    
<div class="content">
    <h1>Add New Film</h1>
    </div>

  <form method ="POST" actions="/Films">
  
  {{ csrf_field() }}
  <div class="control">
  <input type="text" name="Title" placeholder="Film title" value="{{ old('Title') }}" required>
  </div>
  
  <div class="control">
  <textarea name="Genre" placeholder="Genre" required> {{ old('Genre') }}</textarea>
  </div>
  
   <div class="control">
  <textarea name="Synopsis" placeholder="Synopsis" required> {{ old('Synopsis') }}</textarea>
  </div>
  
  <div class="content">
  <button type="submit">Create Project</button>
  </div>
    
   @include('errors')
  
  </form>


@endsection
</html>