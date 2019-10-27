@extends('layout')

@section('content')
<strong><h1 class="content">{{ $Film->Title }}</h1></strong>


<div class="content">{{ $Film->Genre }}</h1>

<div class="content">{{ $Film->Synopsis }}</h1>


<p>
<a href="/Films/{{ $Film->id }}/edit">Edit </a>
</p>

@if ($Film->Orders->count())
<div>
    @foreach ($Film->Orders as $Order)
        <div>
            
            <form method="POST" action="/Orders/{{ $Order->id }}">
                {{method_field('PATCH')}}
                {{ csrf_field() }}
                <label class="checkbox {{ $Order->Ordered ? 'is-complete' : '' }}" for="Ordered">
                    <input type="checkbox" name="Ordered" onChange="this.form.submit()" {{ $Order->Ordered ? 'checked' : '' }}>
                        {{ $Order->Item }}
            
                </label>
            </form>
        
        </div>
    
    @endforeach

</div>
@endif
<br>
<form method="POST" action="/Films/{{ $Film->id }}/Orders" class="box">
{{ csrf_field() }}
    <div class="field">
        <label class="label" for="Item">New Item</label><br>
            <input type="text" class="input" name="Item" placeholder="New Item">
    </div>
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Add</button>
        </div>
    </div>
    
  @include('errors')
    
</form>

@endsection