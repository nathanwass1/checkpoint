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

<H1>Snack Page</H1>

@foreach($groupedCollection as $category=>$products)
    <h2>{{ $category }}</h2>
        <ul>
            @foreach($products as $product)
            <li>{{ $product['name'] }} -- &pound;{{ $product['price']}} </li>
            @endforeach
        </ul>
@endforeach

<h3> Meerkat Items</h3>
 <ul> 
    @foreach($freeItems as $product)
    <li><strong> {{ $product['name'] }}
    @endforeach
 
 </ul>


<p><strong>Total Price of all items: </strong>&pound; {{ $price }} </p>
<p><strong>Meerkat Savings: </strong>&pound; {{ $totalDiscount }} </p>
<p><strong>Price with Meerkat Deal: </strong>&pound; {{ $finalPrice }} </p>














@endsection