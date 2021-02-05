@extends('layouts.home')

@section('title', $data->title)

@section('description')
    {{$data->description}}
@endsection
@section('keywords')
    {{$data->keywords}}
@endsection
