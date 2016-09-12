@extends('layout');

@section('title')
    All Cards
@endsection

@section('content')
    <h1>All Cards!</h1>
    <ul>
        @foreach($cards as $card)
            <li> {{ $card->title }}</li>
        @endforeach
    </ul>
@endsection