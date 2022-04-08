<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link href="{{ URL::asset('landing/assets/img/honda.jpg') }}" rel="shortcut icon" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="{{ asset('assets/adminpos/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

        <style>
            .carousel-item {
                height: 100vh;
                min-height: 350px;
                background: no-repeat center center scroll;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            section {
                padding-top: 5rem;
                padding-bottom: 5rem;
            }

            .lnr {
                display: inline-block;
                fill: currentColor;
                width: 1em;
                height: 1em;
                vertical-align: -0.05em;
                stroke-width: 1;
            }

            .services-icon {
                margin-bottom: 20px;
                font-size: 30px;
            }

            bgc2, .vLine, .hLine {
                background-color: #0F52BA;
            }

            .quote-icon {
                font-size: 40px;
                margin-bottom: 20px;
            }

            .services-icon {
                font-size: 60px;
                margin-left: 2rem;
            }
        </style>

        <title>NAMA COMPANY</title>
    </head>
    <body>
        @if (Request::is('find-my-order'))
            
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <div class="col-md-1">
                    <img src="{{URL::asset('landing/assets/img/honda.jpg')}}" alt="" width="40px" height="40px">
                </div>
                <a class="navbar-brand" href="/">NAMA COMPANY</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item{{ request()->is('find-my-order') ? ' active' : '' }}">
                            <a class="nav-link" href="/find-my-order">Find My Order</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <br><br>
        <section class="py-5 text-center">
            <div class="container"> 
                <h2 class="text-center" id="about">Find My Order</h2>
                <form action="/find-my-order/search" method="POST" class="needs-validation" novalidate>
                    
                    @csrf
                    
                    <p class="text-muted mb-5 text-center">Silahkan Masukkan No. Registrasi Anda</p>
                    <div class="row">
                        <div class="col-md-7">
                            <input type="text" name="search" id="search" class="form-control" style="width: 40%; float: right">
                        </div>
                        <div class="col-md-5">
                            <button type="submit" class="btn btn-primary" style="float: left">Search</button>
                        </div>
                    </div>

                </form>

                {{-- <form class="form-inline">
                    
                    @csrf

                    <p class="text-muted mb-5 text-center">Silahkan Masukkan No. Registrasi Anda</p>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                
                </form> --}}

            </div>
        </section>

        <!-- Footer -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <blockquote class="blockquote text-center mb-0">
                        <svg class="lnr text-muted quote-icon pull-left">
                            <use xlink:href="#lnr-heart"></use>                                       
                        </svg>
                        <p class="mb-0">Bergabunglah dengan kami dan temukan mobil impianmu.</p>
                        <footer class="blockquote-footer">NAMA COMPANY
                            <cite title="Source Title">NAMA COMPANY</cite>
                        </footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    {{-- <a class="flot-right btn btn-white border-0 rounded shadow post-pager-link p-0 next ml-4" href=""> --}}
                        <span class="d-flex h-100">
                            <span class="p-3 d-flex flex-column justify-content-center w-100">
                                <div class="indicator mb-1 text-uppercase text-muted" id="contact">Contact Us :</div>
                                    <p class="f-13"><i class="fas fa-envelope"></i> : xxx@gmail.com</p>
                                    <p class="f-13"><i class="fas fa-phone-square"></i> : 08xx-xxxx-xxxx</p>
                            </span>
                            <span class="bg-primary p-2 d-flex align-items-center text-white">
                                {{-- <i class="fa fa-arrow-circle-right"></i> --}}
                            </span>
                        </span>
                    {{-- </a> --}}
                </div>
            </div>
        </div>
        <!-- /.container -->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>



        @elseif (Request::is('find-my-order/search'))

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <div class="col-md-1">
                    <img src="{{URL::asset('landing/assets/img/honda.jpg')}}" alt="" width="40px" height="40px">
                </div>
                <a class="navbar-brand" href="/">NAMA COMPANY</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item{{ request()->is('find-my-order') ? ' active' : '' }}">
                            <a class="nav-link" href="/find-my-order">Find My Order</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <br><br>
        <section class="py-5 text-center">
            <div class="container"> 
                <h2 class="text-center" id="about">Find My Order</h2>
                <form action="/find-my-order/search" method="POST" class="needs-validation" novalidate>
                    
                    @csrf
                    
                    {{-- <p class="text-muted mb-5 text-center">Silahkan Masukkan No. Registrasi Anda</p> --}}
                    <br>
                    <div class="row">
                        <div class="col-md-7">
                            <input type="text" name="search" id="search" class="form-control" style="width: 40%; float: right" placeholder="Masukkan No. Registrasi Anda">
                        </div>
                        <div class="col-md-5">
                            <button type="submit" class="btn btn-primary" style="float: left">Search</button>
                        </div>
                    </div>

                </form>

                <br>    
                <div class="container">
                    {{-- <div>
                        <p class="mb-5 text-center" style="color: red">Data Anda tidak ditemukan.</p>
                    </div> --}}
                    <center>
                        
                        @if ($data == 0)

                        <table>
                            <tr>
                                <td>
                                    <div class="alert alert-danger" role="alert">
                                        Your order was not found.
                                    </div>
                                </td>
                            </tr>
                        </table>

                        @else

                        <table>
                            <tr>
                                <td>
                                    <div class="alert alert-success" role="alert">
                                        Your order information was found.
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <th width="40%">No. Registrasi</th>
                                            <td width="60%">: {{$pemesanan->no_registrasi}}</td>
                                        </tr>
                                        <tr>
                                            <th width="40%">Nama Customer</th>
                                            <td width="60%">: {{$pemesanan->nama_customer}}</td>
                                        </tr>
                                        <tr>
                                            <th width="40%">Tanggal Masuk</th>
                                            <td width="60%">: {{$pemesanan->tanggal_masuk}}</td>
                                        </tr>
                                        <tr>
                                            <th width="40%">Jenis Mobil</th>
                                            <td width="60%">: {{$pemesanan->jenis_mobil}}</td>
                                        </tr>
                                        <tr>
                                            <th width="40%">Tipe Mobil</th>
                                            <td width="60%">: {{$pemesanan->type_mobil}}</td>
                                        </tr>
                                        <tr>
                                            <th width="40%">Tenor</th>
                                            <td width="60%">: {{$pemesanan->tenor}} bulan</td>
                                        </tr>
                                        <tr>
                                            <th width="40%">Nama Dealer</th>
                                            <td width="60%">: {{$pemesanan->nama_dealer}}</td>
                                        </tr>
                                        <tr>
                                            <th width="40%">Nama Sales Dealer</th>
                                            <td width="60%">: {{$pemesanan->nama_sales_dealer}}</td>
                                        </tr>
                                        <tr>
                                            <th width="40%">Nama Sales Acc</th>
                                            <td width="60%">: {{$pemesanan->nama_sales_acc}}</td>
                                        </tr>
                                        <tr>
                                            <th width="40%">Kondisi Mobil</th>
                                            <td width="60%">
                                                @if ($pemesanan->new_used == "N")
                                                    : Baru
                                                @elseif ($pemesanan->new_used == "S")
                                                    : Bekas
                                                @endif
                                                {{-- : {{$pemesanan->new_used}} --}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="40%">Kode</th>
                                            <td width="60%">: {{$pemesanan->kode_status}}</td>
                                        </tr>
                                        <tr>
                                            <th width="40%">Status</th>
                                            @if ($pemesanan['status'] == "APPROVE")
                                                <td width="60%" style="text-align: left; background-color: lightgreen; color: white">: {{$pemesanan->status}}</td>
                                            @elseif ($pemesanan['status'] == "VALID")
                                                <td width="60%" style="text-align: left; background-color: green; color: white">: {{$pemesanan->status}}</td>
                                            @elseif ($pemesanan['status'] == "IN PROCESS")
                                                <td width="60%" style="text-align: left; background-color: rgb(240, 240, 137); color: white">: {{$pemesanan->status}}</td>
                                            @elseif ($pemesanan['status'] == "CANCEL")
                                                <td width="60%" style="text-align: left; background-color: yellow; color: white">: {{$pemesanan->status}}</td>
                                            @elseif ($pemesanan['status'] == "REJECT")
                                                <td width="60%" style="text-align: left; background-color: red; color: white">: {{$pemesanan->status}}</td>
                                            @endif
                                            {{-- <td width="60%">: {{$pemesanan->status}}</td> --}}
                                        </tr>
                                        <tr>
                                            <th width="40%">Waktu</th>
                                            <td width="60%">: {{$pemesanan->time}} bulan</td>
                                        </tr>
                                        <tr>
                                            <th width="40%">Keterangan</th>
                                            <td width="60%">: {{$pemesanan->keterangan}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-3"></div>
                        </div>

                        @endif
                        
                    </center>
                </div>

                {{-- <form class="form-inline">
                    
                    @csrf

                    <p class="text-muted mb-5 text-center">Silahkan Masukkan No. Registrasi Anda</p>
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                
                </form> --}}

            </div>
        </section>

        <!-- Footer -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <blockquote class="blockquote text-center mb-0">
                        <svg class="lnr text-muted quote-icon pull-left">
                            <use xlink:href="#lnr-heart"></use>                                       
                        </svg>
                        <p class="mb-0">Bergabunglah dengan kami dan temukan mobil impianmu.</p>
                        <footer class="blockquote-footer">NAMA COMPANY
                            <cite title="Source Title">NAMA COMPANY</cite>
                        </footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    {{-- <a class="flot-right btn btn-white border-0 rounded shadow post-pager-link p-0 next ml-4" href=""> --}}
                        <span class="d-flex h-100">
                            <span class="p-3 d-flex flex-column justify-content-center w-100">
                                <div class="indicator mb-1 text-uppercase text-muted" id="contact">Contact Us :</div>
                                    <p class="f-13"><i class="fas fa-envelope"></i> : xxx@gmail.com</p>
                                    <p class="f-13"><i class="fas fa-phone-square"></i> : 08xx-xxxx-xxxx</p>
                            </span>
                            <span class="bg-primary p-2 d-flex align-items-center text-white">
                                {{-- <i class="fa fa-arrow-circle-right"></i> --}}
                            </span>
                        </span>
                    {{-- </a> --}}
                </div>
            </div>
        </div>
        <!-- /.container -->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

        @endif
    </body>
</html>