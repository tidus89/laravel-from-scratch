@extends('layout');

@section('title')
    {{ $card->title }}
@endsection

@section('content')
    <h1> {{ $card->title }} </h1>
@endsection