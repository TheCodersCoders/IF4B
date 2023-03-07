<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid ">
        <div class="row bg-light justify-content-center">
            <div class="col-lg-6">
                <h2 class="text-center">Form Registrasi</h2>
                <form action="proses.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="number" name="nis" class="form-control">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control">
                        <!-- Input Radio JK -->
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="L">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Laki - laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault2" value="P">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Perempuan
                            </label>
                        </div>
                        <!-- Kota Lahir -->
                        <div class="input-group mb-3">
                            <select class="form-select" name="kota">
                                <option selected>Kota</option>
                                <option value="OP">Olympus</option>
                                <option value="AG">Asgardian</option>
                                <option value="BT">Belitung</option>
                                <option value="LV">Luxvilee</option>
                                <option value="WA">Wakanda</option>
                            </select>
                        </div>
                        <!-- Tanggal Lahir -->
                        <label for="tanggal">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                        <!-- Foto -->
                        <label class="mt-2">Foto</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="foto"" accept="image/png, image/jpeg">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark mt-2 mb-2">Daftar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>