@extends ('layout')
@section('content')

<div class="content">
   
    <h2>What To Do on the Site</h2>    
    @foreach ($options as $options)

        <li>{{ $options }}</li>

    @endforeach
    
    <h3>Example:</h3>

    <p>@foreach ($example1 as $example1)
            
            <p>{{ $example1 }}<p>

       @endforeach
    </p>
   

    
</div>
@endsection