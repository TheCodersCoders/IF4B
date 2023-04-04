@extends('layout.master')
@section('title', 'Halaman Fakultas')
@section('subtitle', 'Fakultas')
@section('content')
<table class="table table-hover table-dark table-striped">
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
