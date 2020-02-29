@extends('layout')

@section('title')
Show Tweet
@endsection
@section('content')
<h2>{{ $tweet->author }}</h2>
<p>
    {{ $tweet->message }}
</p>{{$test}}
@endsection
