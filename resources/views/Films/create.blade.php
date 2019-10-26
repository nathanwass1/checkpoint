<!DOCTYPE html>
<html>
<head>
@extends('layout')
</head>
<body>

    <h1>Add New Film</h1>

  <form method ="POST" actions="/Films">
  
  {{ csrf_field() }}
  <div class="control">
  <input type="text" name="title" placeholder="Film title" value="{{ old('Title') }}">
  </div>
  
  <div class="control">
  <textarea name="Genre" placeholder="Genre"> {{ old('Genre') }}</textarea>
  </div>
  
   <div class="control">
  <textarea name="Synopsis" placeholder="Synopsis"> {{ old('Synopsis') }}</textarea>
  </div>
  
  <div>
  <button type="submit">Create Project</button>
  </div>
    
   
  
  </form>





</body>
</html>