@extends('layout.master')
@section('title', 'Halaman Fakultas')
@section('subtitle', 'Fakultas')
@section('content')
<table class="table table-hover table-striped">
    <thead>
     <th>Nama Fakultas</th>   
    </thead>
    <tbody>
        @foreach ($dataFakultas as $item)
        <tr>
            <td>
                {{ $item }}
            </td>
        </tr>
        @endforeach
    </tbody>
        </table>
@endsection
