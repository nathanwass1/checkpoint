<!DOCTYPE html>
<html>
<head>
@extends('layout')
</head>
<body>

<H1>Films</H1>
<ul>
@foreach($Films as $Film)
    <li>
        <a href="/Films/{{ $Film->id }}">
        {{ $Film->Title }} 
    </li>
@endforeach
</ul>

</body>
</html>