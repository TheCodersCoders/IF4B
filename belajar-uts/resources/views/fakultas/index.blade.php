@extends('layout.master')
@section('title', 'Halaman Fakultas')
@section('subtitle', 'Fakultas')
@section('content')
<table class="table table-hover table-dark table-striped">
  <thead>
      <tr>
          <th>Nama Fakultas</th>
          <th>Nama Dekan</th>
          <th>Nama Wakil Dekan</th>
          <th>Created At</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($dataFakultas as $item)
      <tr>
          <td>{{ $item->nama_fakultas }}</td>
          <td>{{ $item->nama_dekan }}</td>
          <td>{{ $item->nama_wakil_dekan }}</td>
          <td>{{ $item->created_at }}</td>
      </tr>
      @endforeach
  </tbody>
      </table>
@endsection