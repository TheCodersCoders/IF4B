<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Air</title>
    <link rel="stylesheet" href="{{ asset('scss/style1.scss') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <a class="btn btn-dark col-lg-2 mt-2 mb-5 m-2" href="{{ url('pilihan') }}">Back</a>
    <a class="btn btn-success col-lg-2 mt-2 mb-5 m-2" href="{{ route('air.create') }}">Tambah data</a>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col">Jenis Air</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($airs as $item)
              <tr>
                <td>{{ $item->jenis_air }}</td>
                <td>
                  <a href="{{ route('air.edit' , $item->id) }}"><button type="button" class="btn btn-success"><i class="fas fa-edit">Edit</i></button></a> 
                  <form method="POST" class="delete-form" action="{{ route('air.destroy', $item->id) }}">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger show_confirm mt-2"><i class="far fa-trash-alt">Delete</i></button>
                  </form>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
    </div>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

