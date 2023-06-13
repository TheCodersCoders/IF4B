<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Pilihan</title>
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet" />
</head>

<body>
    <section class="wrapper opacity-75">
        <div class="container-fostrap">
            <div class="content mt-3">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card"
                                    href="">
                                    <img
                                        src="{{ asset('assets/img/ikan.jpg') }}" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a >
                                            Ikan
                                        </a>
                                    </h4>
                                    <p class="">
                                       Banyak jenis-jenis ikan yang tersedia di platform kami, jika ingin melihat lebih banyak klik tombol dibawah ini!
                                    </p>
                                </div>
                                <div class="card-read-more">
                                    <a href="{{ url('ikan') }}"
                                        class="btn btn-link btn-block">
                                        Disini!!
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card"
                                    href="">
                                    <img
                                        src="{{ asset('assets/img/portfolio/thumbnails/6.jpg') }}" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a>
                                           Kolam Ikan
                                        </a>
                                    </h4>
                                    <p class="">
                                       Ada dua jenis kolam ikan yang kami tawarkan, silahkan klik tombol dibawak ini!
                                    </p>
                                </div>
                                <div class="card-read-more">
                                    <a href="{{ url('air') }}" class="btn btn-link btn-block">
                                        Disini!!
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card"
                                    href="{{ url('air') }}">
                                    <img
                                        src="{{ asset('assets/img/portfolio/thumbnails/2.jpg') }}" />
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a>
                                            Makanan Ikan
                                        </a>
                                    </h4>
                                    <p class="">
                                        Di dalam sini terdapat banyak jenis-jenis makanan ikan yang bisa kalian dapatkan, klik tombol dibawah ini untuk melihat
                                        selengkapnya!
                                    </p>
                                </div>
                                <div class="card-read-more">
                                    <a href="{{ url('makanan') }}"
                                        class="btn btn-link btn-block">
                                        Disini!!
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-dark btn-xl mt-5" href="{{ url('main') }}" style="width: 100px">Back</a>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>