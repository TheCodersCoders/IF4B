@extends('layout.welcome')
@section('title', 'Universitas Multi Data Palembang')
@section('content')
@foreach ($dataWelcome as $item )
{{ $item->content }}
@endforeach
@endsection