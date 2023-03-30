@extends('layout.master')
@section('content2')
<table class="table table-hover table-striped">
    <thead>
     <th>Jurusan</th>   
    </thead>
    <tbody>
        @foreach ($dataJurusan as $item)
        <tr>
            <td>
                {{ $item }}
            </td>
        </tr>
        @endforeach
    </tbody>
        </table>
@endsection