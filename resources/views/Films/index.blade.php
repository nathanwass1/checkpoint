<!DOCTYPE html>
<html>
<head>
@extends('layout')
</head>
<body>

<H1>Films</H1>
<ul>
@foreach($Films as $Films)
    <li>
        <a href="/Films/{{ $Films->id }}">
        {{ $Films->Title }} 
    </li>
    
@endforeach
</ul>

</body>
</html>