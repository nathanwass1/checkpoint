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
    <strong><h1>{{ $Film->Title }}</h1></strong>
    </div>
<div class="content">
<p>{{ $Film->Genre }}</p>

<p>{{ $Film->Synopsis }}</p>


<p>
<a href="/Films/{{ $Film->id }}/edit">Edit </a>
</p>

</div>
<div class="content">
<h2>Order Food</h2>
@if ($Film->Orders->count())

    @foreach ($Film->Orders as $Order)
        <div>
            
            <form method="POST" action="/Orders/{{ $Order->id }}" class="box">
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
        <label class="label" for="Item">Add to Order</label><br>
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