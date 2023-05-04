@extends('layout.main')
@section('title', 'Tambah Data')
@section('subtitle', 'Fakultas')
@section('content')
<div class="row">
<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Fakultas</h4>
                  <p class="card-description">
                    Formulir tambah fakultas
                  </p>
                  <form class="forms-sample" action="{{ route('fakultas.store') }}" method="post"> @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Fakultas</label>
                      <input type="text" class="form-control" id="nama" placeholder="Nama Fakultas" name="nama_fakultas">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Dekan</label>
                      <input type="name" class="form-control" id="namaDekan" placeholder="Nama Dekan" name="nama_dekan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail">Nama Wakil Dekan</label>
                      <input type="name" class="form-control" id="namaWakilDekan" placeholder="Wakil Dekan" name="nama_wakil">
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      <i class="input-helper"></i></label>
                    </div>
                    <button type="submit" class="btn btn-info me-2">Submit</button>
                    <a href="{{ route('fakultas.index') }}"> <button class="btn btn-light">Cancel</button></a>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection