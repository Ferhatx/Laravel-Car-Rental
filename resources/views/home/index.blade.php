@extends('layouts.home')

@section('title', $data->title)

@section('description')
    {{$data->description}}
@endsection
@section('keywords')
    {{$data->keywords}}
@endsection
@section("content")
    @include('home._slider');
    @include('home._offers');
    @include('home._minabout');
    @include('home._comments');
    @include('home._mincontact');
@endsection
