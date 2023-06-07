<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jenis Ikan</title>
  <link rel="icon" href="{{ asset('assets/img/iconfish.png') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
</head>
<body>
  <nav class="navbar bg-primary">
    <div class="container">
      <a class="btn btn-light col-lg-2" href="{{ url('pilihan') }}">Back</a>
      <a class="btn btn-success col-lg-2" href="{{ route('ikan.create') }}">Tambah data</a>
    </div>
  </nav>
  {{-- awal foreach --}}
  <div class="container" style="margin-top:50px;">
    <div class="row">
      @foreach($ikans as $item )
        <div class="col-lg-4">
            <div class="card-sl">
                <div class="card-image">
                    <img
                        src="{{ asset('storage/images/'.$item->foto) }}" class="img-fluid" />
                </div>
                <div class="card-heading">
                    {{ $item->nama_ikan }}
                </div>
                <div class="card-text">
                    {{ $item->deskripsi }}
                </div>
                <div class="card-text">
                    {{ $item->table_air->jenis_air }}
                </div>
                <hr>
                <a href="{{ route('ikan.edit' , $item->id)  }}"><button class="btn btn-success col-lg-4 m-2 btn-flat">Edit</button></a>
                <form method="POST" class="delete-form" action="{{ route('ikan.destroy', $item->id) }}">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger btn-flat show_confirm col-lg-4 m-2" data-toggle="tooltip" title='Delete'>Delete</button>
              </form>
            </div>
          </div>
          @endforeach
    </div>  
  </div>
  {{-- Akhir foreach --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script type="text/javascript">
     $('.show_confirm').click(function(event) {
         var form =  $(this).closest("form");
         var name = $(this).data("name");
         event.preventDefault();
         swal({
             title: `Are you sure you want to delete this record?`,
             text: "If you delete this, it will be gone forever.",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
             form.submit();
           }
         });
     });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</script>
</body>
</html>