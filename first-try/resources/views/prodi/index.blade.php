@extends('layout.main')
@section('title', 'Halaman Prodi')
@section('subtitle', 'Prodi')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Prodi</h4>
          <a href="{{ route('prodi.create') }}"> <button class="btn btn-info mb-2">Tambah Data Prodi</button></a>
          <div class="table-responsive">
            <table class="table table-light table-striped table-hover">
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
          </div>
        </div>
      </div>
    </div>
  </div>


    
@endsection