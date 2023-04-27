@extends('layout.master')
@section('title', 'Halaman Prodi')
@section('subtitle', 'Prodi')
@section('content')
<table class="table table-light table-striped table-active table-hover">
    <thead>
        <tr>
            <td>Nama Prodi</td>
            <td>Fakultas</td>
            <td>Created At</td>
        </tr>
    </thead>
    @foreach ($prodis as $item )
    <tbody>
        <tr>
            <td>{{ $item->nama_prodi }}</td>
            <td>{{ $item->fakultas->nama_fakultas }}</td>
            <td>{{ $item->created_at }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
    
@endsection