@extends('layout.main')
@section('title', 'Halaman Fakultas')
@section('subtitle', 'Fakultas')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          @if (Session::get('success'))
          <div class="alert alert-success"></div>
            {{ Session::get ('success')}}
          @endif
          <h4 class="card-title">Mahasiswa</h4>
         <a href="{{ route('mahasiswa.create') }}"><button class="btn btn-info mb-2 show_confirm">Tambah Data</button></a>
         @if (count($mahasiswas) != 0)
         <button class="btn btn-danger mb-2" id="multi-delete " data-route="{{ route('posts.mhs-multi-delete') }}">Delete All Selected</button>
         @endif
          <div class="table-responsive">
            <table class="table table-light table-hover" id="posts-table" >
                <thead >
                    <tr>
                        <th class="bg-primary"><input type="checkbox" class="check" id="selectAll" name="checkAll"></th>
                        <th class="bg-primary">NPM</th>
                        <th class="bg-primary">Nama Mahasiswa</th>
                        <th class="bg-primary">Foto</th>
                        <th class="bg-primary">Tanggal Lahir</th>
                        <th class="bg-primary">Kota Lahir</th>
                        <th class="bg-primary">Prodi</th>
                        <th class="bg-primary">Created At</th>
                        <th class="bg-danger text-center">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswas as $item)
                    <tr>
                      <td><input type="checkbox" class="check" value="{{ $item->id }}" id="posts-table"></td>
                        <td>{{ $item->npm }}</td>
                        <td>{{ $item->nama }}</td>
                        <td><img src="{{ asset('storage/images/'.$item->foto) }}"   /></td>
                        <td>{{ $item->tanggal_lahir }}</td>
                        <td>{{ $item->kota_lahir }}</td>
                        <td>{{ $item->prodi->nama_prodi }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                          <a href="{{ route('mahasiswa.edit' , $item->id)  }}"><button class="btn btn-success btn-lg mb-2 btn-flat">Edit</button></a>
                          <form method="POST" class="delete-form" action="{{ route('mahasiswa.destroy', $item->id) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-lg btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                        </form>
                        </td>
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
