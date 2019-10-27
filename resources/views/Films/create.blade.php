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
    
    
  <form method ="POST" actions="/Films" class="box">
  
  {{ csrf_field() }}
  <div class="field">
  <input type="text" name="Title" placeholder="Film title" value="{{ old('Title') }}" required>
  </div>
  
  <div class="field">
  <textarea name="Genre" placeholder="Genre" required> {{ old('Genre') }}</textarea>
  </div>
  
   <div class="field">
  <textarea name="Synopsis" placeholder="Synopsis" required> {{ old('Synopsis') }}</textarea>
  </div>
  
  <div class="field">
  <button type="submit">Create Project</button>
  </div>
    
   @include('errors')
  
  </form>
</div>

@endsection
</html>