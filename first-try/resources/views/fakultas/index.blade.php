@extends('layout.main')
@section('title', 'Halaman Fakultas')
@section('subtitle', 'Fakultas')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Fakultas</h4>
         <a href="{{ route('fakultas.create') }}"> <button class="btn btn-info mb-2">Tambah Data</button></a>
          <div class="table-responsive">
            <table class="table table-light table-hover">
                <thead >
                    <tr >
                        <th class="bg-primary">Nama Fakultas</th>
                        <th class="bg-primary">Nama Dekan</th>
                        <th class="bg-primary">Nama Wakil Dekan</th>
                        <th class="bg-primary">Prodi</th>
                        <th class="bg-primary">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataFakultas as $item)
                    <tr>
                        <td>{{ $item->nama_fakultas }}</td>
                        <td>{{ $item->nama_dekan }}</td>
                        <td>{{ $item->nama_wakil_dekan }}</td>
                        <td>
                            @foreach ( $item->prodi as $prodi )
                            {{ $prodi->nama_prodi }}
                            @endforeach 
                            </td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
