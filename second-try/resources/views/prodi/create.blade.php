@extends('layout.main')
@section('title', 'Tambah Data Prodi')
@section('subtitle', 'Prodi')
@section('content')
<div class="row">
<div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Prodi</h4>
                  <p class="card-description">
                    Formulir tambah prodi
                  </p>
                  <form class="forms-sample" action="{{ route('prodi.store') }}" method="post"> @csrf
                    <div class="form-group">
                      <label>Nama Prodi</label>
                      <input type="text" class="form-control" id="nama" placeholder="Nama Fakultas" name="nama_prodi" value="{{ old('nama_prodi') }}">
                      @error('nama_prodi')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <label for="fakultas_id">Nama Fakultas</label>
                    <select name="fakultas_id" class="form-select js-example-basic-single" aria-label="Default select example">
                      @foreach ($fakultas as $item )  
                      <option selected value="{{ $item['id'] }}">{{ $item['nama_fakultas'] }}</option>
                      @endforeach
                      
                    </select>
                      @error('fakultas_id')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                    </div>
                    <button type="submit" class="btn btn-info me-2">Submit</button>
                    <a href="{{ route('prodi.index') }}"><button class="btn btn-danger mt-2">Cancel</button></a>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection