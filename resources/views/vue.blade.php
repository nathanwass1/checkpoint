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

<style> .color-red { color: red; }</style>

<div id="root">

<ul>
<li v-for="products in products" v-text="products"></li>
</ul>
<input id="input"type="text" v-model="newProduct">

<button v-on:click="addProduct">Add product</button>


</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>



<script>



var app = new Vue({
    el: '#root',
    data: {
        newProduct: '',
        products: ['Add Items To Order Here'],
        
    },
    
    methods: {
        addProduct(){
            this.products.push(this.newProduct);
            
            this.newProduct = '';
        }
    }
})


document.querySelector('#button').addEventListener('click', () => {
    let name = document.querySelector('#input').value;
    app.products.push(name);
});
</script>

</div>

@endsection