@extends('layout.master')
@section('title', 'Halaman Fakultas')
@section('subtitle', 'Fakultas')
@section('content')
        <ul>
            @foreach ($dataFakultas as $item)
            <li>
                {{ $item }}
            </li>
            @endforeach
        </ul>