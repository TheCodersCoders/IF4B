<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Ikan</title>
    <link rel="icon" href="{{ asset('assets/img/iconfish.png') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-3">Tambah Data Ikan</h1>
        <form class="forms-sample " action="{{ route('ikan.store') }}" method="post" enctype="multipart/form-data">@csrf
          <div class="form-group">
            <div class="mb-3 col-lg-6">
                <label  class="form-label">Nama Ikan</label>
                <input type="text" class="form-control" id="nama_ikan" placeholder="Ikan" value="{{ old('nama_ikan') }}" name="nama_ikan">
                <label  class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" id="deskripsi" placeholder="deskripsi" value="{{ old('deskripsi') }}" name="deskripsi"> </textarea>
                <label>Foto</label>
                <input type="file" class="form-control" id="foto" placeholder="Foto" name="foto" value="{{ old('foto') }}">                    
            @error('foto')
            <span class="text-danger">{{ $message }}</span>
            @enderror
              </div>
            </div>
              <button type="submit" class="btn btn-info me-2">Submit</button>
              <a href="{{ route('ikan.index') }}"><button class="btn btn-danger mt-2">Cancel</button></a>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>
</html>