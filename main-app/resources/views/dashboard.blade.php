<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pakar Ikan</title>
        <!-- Favicon-->
        <link rel="icon" href="{{ asset('assets/img/iconfish.png') }}">
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="{{ asset('css/style3.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Home</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Chart</a></li>
                        <li class="nav-item"><a class="nav-link" href="#logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Selamat Datang <br> {{ auth()->user()->name }}</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Ini adalah tempat toko yang dimana bisa membeli beragam ikan,kolam dengan berbagai jenis air dan berbagai macam makanan ikan </p>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Disini kalian bisa membeli ikan air tawar dan ikan air asin dan kalian juga bisa memesan kolam nya dan juga tentunya kalian bisa sekalian untuk membeli pakan makanannya juga</p>
                        <a class="btn btn-light btn-xl" href="{{ url('pilihan') }}">Klik Disini!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Chart -->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <h1>Chart</h1>
                        </div>
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        
                            <script src="https://code.highcharts.com/highcharts.js"></script>
                            <script src="https://code.highcharts.com/modules/exporting.js"></script>
                            <script src="https://code.highcharts.com/modules/export-data.js"></script>
                            <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                  
                          <figure class="highcharts-figure">
                            <div id="container"></div>
                            <p class="highcharts-description">
                              A basic column chart comparing emissions by pollutant.
                              Oil and gas extraction has the overall highest amount of
                              emissions, followed by manufacturing industries and mining.
                              The chart is making use of the axis crosshair feature, to highlight
                              years as they are hovered over.
                            </p>
                          </figure>
                          <style>
                            .highcharts-figure,
                  .highcharts-data-table table {
                      min-width: 310px;
                      max-width: 800px;
                      margin: 1em auto;
                  }
                  
                  #container {
                      height: 400px;
                  }
                  
                  .highcharts-data-table table {
                      font-family: Verdana, sans-serif;
                      border-collapse: collapse;
                      border: 1px solid #ebebeb;
                      margin: 10px auto;
                      text-align: center;
                      width: 100%;
                      max-width: 500px;
                  }
                  
                  .highcharts-data-table caption {
                      padding: 1em 0;
                      font-size: 1.2em;
                      color: #555;
                  }
                  
                  .highcharts-data-table th {
                      font-weight: 600;
                      padding: 0.5em;
                  }
                  
                  .highcharts-data-table td,
                  .highcharts-data-table th,
                  .highcharts-data-table caption {
                      padding: 0.5em;
                  }
                  
                  .highcharts-data-table thead tr,
                  .highcharts-data-table tr:nth-child(even) {
                      background: #f8f8f8;
                  }
                  
                  .highcharts-data-table tr:hover {
                      background: #f1f7ff;
                  }
                  
                          </style>
                          <script>
                            Highcharts.chart('container', {
                      chart: {
                          type: 'column'
                      },
                      title: {
                          text: 'Pemasukkan Ikan'
                      },
                      subtitle: {
                          text: ''
                      },
                      xAxis: {
                          categories: [
                           @foreach ($airikan as $item )
                             '{{ $item->jenis_air }}',
                           @endforeach
                          ],
                          crosshair: true
                      },
                      yAxis: {
                          min: 0,
                          title: {
                              text: 'Rainfall (mm)'
                          }
                      },
                      tooltip: {
                          headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                          pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                              '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                          footerFormat: '</table>',
                          shared: true,
                          useHTML: true
                      },
                      plotOptions: {
                          column: {
                              pointPadding: 0.2,
                              borderWidth: 0
                          }
                      },
                      series: [{
                          name: 'Air',
                          data: [
                              @foreach ($airikan as $item )
                                {{ $item->jumlah }},
                              @endforeach
                          ]
                      }
                    ]
                  });
                          </script>
                        </div>
                      </div>
                    </div>
        
        <!-- Footer-->
        <footer class=" py-5" id="logout">
            <div class="container "><div class="small text-center text-muted">Copyright &copy; 2023 - Pakar Ikan</div></div>
            <form method="POST" action="{{ route('logout') }}" class="text-center">
                @csrf
                <button type="submit" class="btn-hover mb-2 mt-2 btn-danger" style="width: 100px; border-radius: 5px;">Logout</button>
              </form>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
