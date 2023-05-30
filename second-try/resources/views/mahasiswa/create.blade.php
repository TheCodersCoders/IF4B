@extends('layout.main')
@section('title', 'Tambah Mahasiswa')
@section('subtitle', 'Mahasiswa')
@section('content')
<div class="row">
<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Mahasiswa</h4>
                  <p class="card-description">
                    Formulir tambah mahasiswa
                  </p>
                  <form class="forms-sample" action="{{ route('mahasiswa.store') }}" method="post" enctype="multipart/form-data"> @csrf
                    <div class="form-group">
                      <label>NPM </label>
                      <input type="text" class="form-control" id="npm" placeholder="NPM" name="npm" value="{{ old('npm') }}">
                      @error('npm')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group mt-2">
                      <label>Nama </label>
                      <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{ old('nama') }}">
                      @error('nama')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label>Prodi </label>
                        <select name="prodi_id" class="form-control js-example-basic-single mb-3">
                          @foreach ($prodi as $item)
                                 <option value="{{$item->id}}">{{$item->nama_prodi}}</option>
                          @endforeach 
                           @error('prodi_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    <label>Foto</label>
                        <input type="file" class="form-control" id="foto" placeholder="Foto" name="foto" value="{{ old('foto') }}">                    
                    @error('foto')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                      @error('tanggal_lahir')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    
                    <div class="form-group">
                      <label>Kota Lahir</label>
                      <input type="text" class="form-control" id="kota_lahir" placeholder="Kota Lahir" name="kota_lahir" value="{{ old('kota_lahir') }}">
                      @error('kota_lahir')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    </div>
                    <button type="submit" class="btn btn-info me-2">Submit</button>
                    <a href="{{ route('mahasiswa.index') }}"><button class="btn btn-danger mt-2">Cancel</button></a>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection