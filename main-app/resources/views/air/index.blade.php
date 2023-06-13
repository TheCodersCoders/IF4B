<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <a class="btn btn-dark col-lg-2 mt-2 mb-5 m-2" href="{{ url('pilihan') }}">Back</a>
    <a class="btn btn-success col-lg-2 mt-2 mb-5 m-2" href="{{ route('air.create') }}">Tambah data</a>
<div class="container">
    <table class="table table-striped table-primary text-center">
        <thead>
          <tr>
            <th scope="col">Jenis Air</th>
            <th scope="col">Foto Kolam</th>
            <th class="col">Edit/Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($airs as $item )
          <tr>
            <td>{{ $item->jenis_air }}</td>
            <td><img src="{{ asset('storage/images/'.$item->foto) }}" width="50px"  /></td>
            <td><a href="{{ route('air.edit' , $item->id)  }}"><button class="btn btn-success col-lg-4 m-2 btn-flat">Edit</button></a>
              <form method="POST" class="delete-form" action="{{ route('air.destroy', $item->id) }}">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-flat show_confirm col-lg-4 m-2" data-toggle="tooltip" title='Delete'>Delete</button>
            </form></td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

