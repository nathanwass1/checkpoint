@extends('layout')

@section('content')





<div class="content">

    <h1>Edit Film</h1>

  <form method ="POST" action="/Films/{{ $Film->id }}">
  {{ method_field('PATCH') }}
  {{ csrf_field() }}
  <div class="control">
  <input type="text" name="Title" placeholder="Film title" value="{{ $Film->Title}}">
  </div>
  
  <div class="control">
  <textarea name="Genre" placeholder="Genre"> {{ $Film->Genre }}</textarea>
  </div>
  
   <div class="control">
  <textarea name="Synopsis" placeholder="Synopsis">{{ $Film->Synopsis }}</textarea>
  </div>
  
<div class="field">
    <div class="control">
        <button type="submit" class="button is-link">Update Film</button>
        </div>
</div>
    
  </form>
  
  
<form method="POST" action="/Films/{{ $Film->id }}">
{{ method_field('DELETE') }}
{{ csrf_field() }}

<div class="field">
    <div class="control">
        <button type="submit" class="button">Delete Film</button>
        </div>

</form>

</div>
@endsection





